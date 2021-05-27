
<div class="modal fade" id="withdraw-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-1 mb-1">Withdraw Money</div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <div class="alert alert-primary text-justify alert-dismissable">
                                To withdraw profit, you must select a payment system, enter the amount and press the button to confirm the withdrawal. Attention! The minimum withdrawal amount is $ 20.00</div>
                        </div>
                        <form role="form" method="post" action="{{route('withdraw')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <select class="form-control" name="currency" id="currency">
                                        <option value="btc">BTC</option>
                                        <option value="ltc">LTC</option>
                                        <option value="eth">ETH</option>
                                        <option value="tether">Tether</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                    </div>
                                    <input name="amount" class="form-control" placeholder="Amount" type="number" step="0.01" required />
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Withdraw Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
