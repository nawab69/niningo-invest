<div class="row">

    <div class="col-lg-12">
        <div class="card card-stats bg-alternate">
            <div class="card-body">
                Step 1

                <h2 class="mt-3 card-title">Deposit amount, deposit term and options</h2>

                <p class="mt-2">
                    Enter the amount you want to deposit and calculate the amount of profit you will receive. The calculator helps to calculate the required amount of profit depending on the period and options.
                </p>

                <div class="row mt-3 align-items-center">
                    <div class="col-lg-3">
                        <label class="form-control-label" for="term">Term (months)</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="range" wire:model="term" class="form-control-range" min="3" max="12" />
                    </div>
                    <div class="col-lg-3">
                        <input type="number" class="form-control" wire:model="term" min="3" max="12">
                    </div>
                </div>

                <div class="row mt-3 align-items-center">
                    <div class="col-lg-3">
                        <label class="form-control-label" for="percent">% (Per month)</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="range" wire:model="percent" class="form-control-range" min="10" max="19" />
                    </div>
                    <div class="col-lg-3">
                        <input type="number" class="form-control" wire:model="percent" min="10" max="19">
                    </div>
                </div>

                <div class="row mt-3 align-items-center">
                    <div class="col-lg-3">
                        <label class="form-control-label" for="percent">Amount</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="range" wire:model="amount" class="form-control-range" min="100" max="100000" />
                    </div>
                    <div class="col-lg-3">
                        <input type="number" class="form-control" wire:model="amount" min="100" max="100000">
                    </div>
                </div>

                <div class="row border border-primary px-2 py-3 rounded mt-4 mx-4">
                    <div class="col-3"><h1>Deposit Amount</h1><br /> <h4>{{$amount}} $</h4></div>
                    <div class="col-3"><h1>Percent Rate</h1><br /> <h4>{{$percent}}</h4></div>
                    <div class="col-3"><h1>Term (Month)</h1><br /> <h4>{{$term}} Month</h4></div>
                    <div class="col-3"><h1>Interest</h1><br /> <h4>{{$interest}} $</h4></div>
                </div>

                <div class="row mt-5">
                    <div class="col">
                        <div>
                            <p>Step 2</p>
                        </div>
                        <br />
                        <h1>Make a Payment</h1>
                        <p class="mt-2">
                            To get USD please make a payment. You can send payment directly to our address or you may pay online. Once you paid, you will receive an email about the successfull deposit.
                        </p>
                        <div>
                            <button class="btn btn-primary" wire:click="confirm">
                                Activate Deposit
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>




</div>
