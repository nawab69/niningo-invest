<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Hexters\CoinPayment\CoinPayment;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class TopupController extends Controller
{
    public function payment(Request $request)
    {

        $request->validate([
            'amount' => 'required'
        ]);



        /*
        *   @required true
        */
        $transaction['order_id'] = uniqid(); // invoice number
        $transaction['amountTotal'] = (FLOAT) $request->amount;
        $transaction['note'] = 'Top Up';
        $transaction['buyer_name'] = auth()->user()->first_name.' '.auth()->user()->last_name;
        $transaction['buyer_email'] = auth()->user()->email;
        $transaction['redirect_url'] = url('/home'); // When Transaction was comleted
        $transaction['cancel_url'] = url('/home'); // When user click cancel link

        /*
        *   @required true
        *   @example first item
        */
        $transaction['items'][] = [
            'itemDescription' => 'Top Up',
            'itemPrice' => (FLOAT) $request->amount, // USD
            'itemQty' => (INT) 1,
            'itemSubtotalAmount' => (FLOAT) $request->amount // USD
        ];

        $transaction['payload'] = [
            'transaction' => [
//                'trx_id' => $txn->trx_id,
                'type' => 'topup'
            ]
        ];

//        dd($transaction);

        $txn = Transaction::create([
            'user_id' => auth()->user()->id,
            'trx_id'  => $transaction['order_id'],
            'type'   => 'deposit',
            'status' => 'pending',
            'amount' => $request->amount
        ]);

        return redirect(CoinPayment::generatelink($transaction));
    }
}
