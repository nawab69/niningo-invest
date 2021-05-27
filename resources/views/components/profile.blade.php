<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Edit profile </h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('profile.update')}}" method="post">
            @method('PATCH')
            @csrf
            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-email">Email address</label>
                            <input type="email" id="input-email" class="form-control" value="{{$user->email}}" disabled>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="phone">Phone</label>
                            <input name="phone" type="text" id="phone" class="form-control" placeholder="Phone" value="{{$user->phone}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-first-name">First name</label>
                            <input type="text" id="input-first-name" name="first_name" class="form-control" placeholder="First name" value="{{$user->first_name}}"  />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Last name</label>
                            <input type="text" id="input-last-name" name="last_name" class="form-control" placeholder="Last name" value="{{$user->last_name}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-address">Address</label>
                            <input id="input-address" name="address" class="form-control" placeholder="Home Address" value="{{$user->address}}" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4" />

            <!-- Description -->
            <h6 class="heading-small text-muted mb-4">Withdrawal Info</h6>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="bitcoin_address">Bitcoin</label>
                        <input type="text" id="bitcoin_address" name="btc" class="form-control" placeholder="Bitcoin" value="{{$wallet->btc}}"  />
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="litecoin_address">Litecoin</label>
                        <input type="text" id="litecoin_address" name="ltc" class="form-control" placeholder="Litecoin" value="{{$wallet->ltc}}"  />
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="eth_address">Ethereum</label>
                        <input type="text" id="eth_address" name="eth" class="form-control" placeholder="Ethereum" value="{{$wallet->eth}}"  />
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="usdt_address">Tether</label>
                        <input type="text" id="usdt_address" name="tether" class="form-control" placeholder="Tether" value="{{$wallet->tether}}"  />
                    </div>
                </div>

            </div>

            <div class="row">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
