<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use App\Models\Transaction;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function withdraw(Request $request)
    {
        $request->validate([
            'currency' => 'required',
            'amount'   => 'required'
        ]);

        $bal = Fund::where('user_id',auth()->user()->id)->first();



        if($request->amount <= $bal->available && $request->amount >= 0){
            Transaction::create([
                'trx_id' => uniqid(),
                'user_id' => auth()->user()->id,
                'type'  => 'withdraw',
                'amount' => $request->amount,
                'status' => 'pending',
                'currency' => $request->currency
            ]);

            $bal->update([
                'available' => $bal->available - $request->amount,
                'withdrawn' => $bal->withdrawn + $request->amount,
            ]);

            notify()->success('Withdraw Request Successfully Placed');

            return redirect()->back();
        }

        notify()->error('Invalid amount or Insufficient Balance');
        return redirect()->back();
    }
}
