<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Fund;
use App\Models\Invest;
use App\Models\Plan;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TransactionController extends Controller
{

    public function index()
    {
        Gate::authorize('app.dashboard');
        $meta['title'] = 'All Transaction';
        $transactions = Transaction::all();
        return view('backend.transactions.index',compact('transactions','meta'));
    }

    public function topup()
    {
        Gate::authorize('app.dashboard');
        $meta['title'] = 'All Top Up';
        $transactions = Transaction::where('type','deposit')->orderBy('created_at','desc')->get();
        return view('backend.transactions.index',compact('transactions','meta'));
    }

    public function funds()
    {
        Gate::authorize('app.dashboard');
        $meta['title'] = 'Funds';
        $funds = Fund::with('user')->get();
        return view('backend.funds.index',compact('meta','funds'));
    }

    public function invests()
    {
        Gate::authorize('app.dashboard');
        $meta['title'] = 'Investments';
        $invests = Invest::with('user')->get();
        return view('backend.funds.investments',compact('meta','invests'));
    }

    public function withdrawal()
    {
        Gate::authorize('app.dashboard');
        $transactions = Transaction::where('type','withdraw')->with('user')->get();
        return view('backend.transactions.withdrawal',compact('transactions'));
    }

    public function changePlan(Request $request)
    {
        $request->validate([
            'month' => 'required',
            'percent' => 'required'
        ]);

        Plan::updateByMonth([
            'month' => $request->month,
            'percent' => $request->percent
        ]);

        notify()->success('Plan Updated Successfully');

        return redirect()->back();
    }




}
