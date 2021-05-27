<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function send(Request $request)
    {


        $request->validate([
            'email' => 'required',
            'amount' => 'required'
        ]);

        if($request->amount > 0 && $request->amount <= auth()->user()->fund->available){
            $recepient = User::where('email',$request->email)->first();

            if($recepient){
                $sender = Fund::where('user_id',auth()->user()->id)->first();
                $receiver = Fund::where('user_id',$recepient->id)->first();

                $sender->update([
                    'available' => $sender->available - $request->amount,
                    'transfered_fund' => $sender->transfered_fund + $request->amount,
                ]);

                $receiver->update([
                    'available' => $receiver->available + $request->amount,
                    'fund_transfers_received' => $receiver->fund_transfers_received + $request->amount,
                ]);

                $trx_id = uniqid();

                Transaction::create([
                    'trx_id' => $trx_id,
                    'user_id' => auth()->user()->id,
                    'type'  => 'send',
                    'amount' => $request->amount,
                    'status' => 'completed'
                ]);

                Transaction::create([
                    'trx_id' => $trx_id,
                    'user_id' => $recepient->id,
                    'type'  => 'receive',
                    'amount' => $request->amount,
                    'status' => 'completed'
                ]);

                notify()->success('Transaction Successful','We have send your money to the receiver account');


            }else{
                notify()->error('Transaction Error','Recipient not Found');
            }
        }else{
            notify()->error('Transaction Error','Check the amount and your available balance first');
        }

        return redirect()->back();
    }
}
