<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use App\Models\Transaction;
use Hexters\CoinPayment\CoinPayment;
use Hexters\CoinPayment\Entities\CoinpaymentTransaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $transactions = Transaction::where('type','deposit')->where('status','pending')->get();

        foreach($transactions as $trx){
            $order_id = $trx->trx_id;
            $txn = CoinpaymentTransaction::where('order_id',$order_id)->first();
            if($txn && $txn->status === 0){
                CoinPayment::getstatusbytxnid($txn->txn_id);
            }
        }

        foreach($transactions as $trx){
            $order_id = $trx->trx_id;
            $txn = CoinpaymentTransaction::where('order_id',$order_id)->first();
            if($txn && $txn['status'] === 100 && $trx->status === 'pending'){
                $trx->update([
                    'status' => 'completed'
                ]);
            }
        }




        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {


        $profile = auth()->user();
        $wallet = auth()->user()->wallet;


        $profile->update([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'phone'       => $request->phone,
            'address'     => $request->address ?? '',
        ]);

        $wallet->update([
            'btc' => $request->btc,
            'ltc' => $request->ltc,
            'eth' => $request->eth,
            'tether' => $request->tether,
        ]);

        notify()->success('Success! ', 'Profile updated successful');

        return redirect()->back();

    }
}
