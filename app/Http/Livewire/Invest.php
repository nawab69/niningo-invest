<?php

namespace App\Http\Livewire;

use App\Models\Fund;
use App\Models\Plan;
use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;

class Invest extends Component
{

    public $term, $percent , $amount , $plan, $interest = 0;

    public function mount()
    {
        $plan = Plan::all();
        $this->plan = $plan;
        $firstPlan = $this->plan->where('month',3)->first();


        $this->term = $firstPlan->month;
        $this->percent = $firstPlan->percent;
        $this->amount = 0;
    }

    public function updatedTerm($value)
    {
       $this->percent =  $this->plan->where('month',$value)->first()->percent;
        $this->interest = ($this->amount * $this->percent * $this->term ) / 100;
    }

    public function updatedPercent($value)
    {
        $this->term =  $this->plan->where('percent',$value)->first()->month;
        $this->interest = ($this->amount * $this->percent * $this->term ) / 100;
    }

    public function updatedAmount($value)
    {
            $this->interest = ($this->amount * $this->percent * $this->term ) / 100;
    }

    public function confirm()
    {
        if($this->amount > 0 && auth()->user()->fund->available >= $this->amount){
            $bal = Fund::where('user_id',auth()->user()->id)->first();

            $bal->update([
               'available' => $bal->available - $this->amount,
                'active_deposits' => $bal->active_deposits + $this->amount,
                'active_investments' => $bal->active_deposits + $this->amount
            ]);

            \App\Models\Invest::create([
                'user_id' => auth()->user()->id,
                'month' => $this->term,
                'percent' => $this->percent,
                'amount' => $this->amount,
                'profit_type' => 'on_balance',
                'start_date' => Carbon::now()->toDate(),
                'end_date' => Carbon::now()->addMonths($this->term),
                'status' => 'active',
                'next_profit_date' => Carbon::now()->addMonth()
            ]);

            Transaction::create([
                'user_id' => auth()->user()->id,
                'type' => 'invest',
                'trx_id' => uniqid(),
                'amount' => $this->amount,
                'status' => 'completed'
            ]);

            notify()->success('success','Investment Placed Successfully');

             $this->redirect('home');
        }
        else{
            notify()->error('Error','Please check your available balance');
             $this->redirect('invest');
        }
    }


    public function render()
    {

//        dd($this->amount);
        return view('livewire.invest');
    }
}
