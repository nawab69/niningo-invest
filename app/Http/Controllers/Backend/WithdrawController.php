<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function complete(Request $request, $id)
    {
        $trx = Transaction::find($id);
        $trx->update([
            'status' => 'complete'
        ]);

        notify()->success('Updated Successful');

        return redirect()->back();

    }


    public function cancel(Request $request, $id)
    {
        $trx = Transaction::find($id);

        if($trx->status !== 'cancelled'){


        $trx->update([
            'status' => 'cancelled'
        ]);
        }


        $trx->user->fund([
            'available' => $trx->user->fund->available += $trx->amount,
        ]);

        notify()->success('Updated Successful');

        return redirect()->back();
    }
}
