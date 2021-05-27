
<div class="row">

    <div class="col-md-4 col-sm-12">
        <div class="card bg-gradient-primary border-0 h-100">
        <!-- Card body -->
        <div class="card-body">
            <div class="row">
            <div class="col-auto">
                <button type="button" class="btn btn-lg mr-0">
                <i class="fas fa-wallet text-xl text-white"></i>
                </button>
            </div>
            <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0 text-white">Available Funds</h5>
                <span class="h2 font-weight-bold mb-0 text-white">{{$fund->available}} $</span>

            </div>

            </div>
            <p class="mt-3 mb-0 text-sm">
            <a href="#!" class="text-uppercase text-muted mb-0 text-white">FINANCIAL SUMMARY</a>
            </p>
            <div class="row">
                <div class="col">
                    <div class="text-white text-md">{{$fund->replenished}} $</div>
                    <div class="text-white text-sm"><small>Replenished</small></div>
                </div>
                <div class="col">
                    <div class="text-white text-md">{{$fund->withdrawn}} $</div>
                    <div class="text-white text-sm"><small>Withdrawn</small></div>
                </div>
                <div class="col">
                    <div class="text-white text-md">{{$fund->transfered_fund}} $</div>
                    <div class="text-white text-sm"><small>Transferred Funds</small></div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-12">
        <div class="card bg-gradient-info border-0 h-100">
        <!-- Card body -->
        <div class="card-body">
            <div class="row">
            <div class="col-auto">
                <button type="button" class="btn btn-lg mr-0">

                <i class="fas fa-chart-bar text-xl text-white"></i>
                </button>
            </div>
            <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0 text-white">ACTIVE INVESTMENTS</h5>
                <span class="h2 font-weight-bold mb-0 text-white">{{$fund->active_investments}} $</span>

            </div>

            </div>
            <p class="mt-3 mb-0 text-sm">
            <a href="#!" class="text-uppercase text-muted mb-0 text-white">MY CONTRIBUTION</a>
            </p>
            <div class="row">
                <div class="col">
                    <div class="text-white text-md">{{$fund->active_deposits}} $</div>
                    <div class="text-white text-sm"><small>Active deposits</small></div>
                </div>
                <div class="col">
                    <div class="text-white text-md">{{$fund->deposit_income}} $</div>
                    <div class="text-white text-sm"><small>Deposit income</small></div>
                </div>
                <div class="col">
                    <div class="text-white text-md">{{$fund->fund_transfers_received}} $</div>
                    <div class="text-white text-sm"><small>Funds transfers received</small></div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-12">
        <div class="card bg-gradient-danger border-0 h-100">
        <!-- Card body -->
        <div class="card-body">
            <div class="row">
            <div class="col-auto">
                <button type="button" class="btn btn-lg mr-0">

                <i class="fas fa-chart-bar text-xl text-white"></i>
                </button>
            </div>
            <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0 text-white">Affiliate Statistics</h5>
                <span class="h2 font-weight-bold mb-0 text-white">0</span>

            </div>

            </div>
            <p class="mt-3 mb-0 text-sm">
            <a href="#!" class="text-uppercase text-muted mb-0 text-white">BRIEF SUMMARY</a>
            </p>
            <div class="row">
                <div class="col">
                    <div class="text-white text-md">{{$fund->partners_turnover}} $</div>
                    <div class="text-white text-sm"><small>Partners turnover</small></div>
                </div>
                <div class="col">
                    <div class="text-white text-md">{{$fund->daily_income}}$</div>
                    <div class="text-white text-sm"><small>Daily income</small></div>
                </div>
                <div class="col">
                    <div class="text-white text-md">{{$fund->earned}} $</div>
                    <div class="text-white text-sm"><small>Earned from partners</small></div>
                </div>
            </div>
        </div>
        </div>
    </div>


</div>
