@extends('layouts.dashboard.app')

@php
    $fund = auth()->user()->fund;
@endphp


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mt-0">
                    <div class="card card-stats bg-alternate">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Earn with Referral</h5>
                                    <p class="text-justify mt-2">
                                        Invite your partners and receive a bonus - 5% of the value of contribution and 0.3% daily bonus of the value of contribution
                                    </p>
                                    <h5 class="mt-4">Referal Url</h5>
                                    <div class="d-flex mt-3">
                                        <input class="form-control" type="text" value="{{url('register')."?ref=".auth()->user()->id}}" id="referLink" readonly />
                                        <button onclick="copyToClipboard()" class="btn btn-primary"> <i class="fa fa-copy"></i> </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="card card-stats bg-alternate">
                        <div class="card-header">
                            <h3>
                                Referral List
                            </h3>
                        </div>

                        <div class="table-responsive" data-toggle="list" data-list-values='["trx_id", "amount", "status", "users","date"]'>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="trx_id">SL NO</th>
                                    <th scope="col" class="sort" data-sort="amount">Name</th>


                                </tr>
                                </thead>
                                <tbody class="list">

                                @php
                                    $refs = auth()->user()->referral()->paginate(5);
                                @endphp

                                @foreach($refs as $index => $ref)
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{$index + 1}}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            ${{$ref->first_name.' '.$ref->last_name}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            {{$refs->links()}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">

                <div>
                    <div class="card bg-gradient-primary border-0 h-100">
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

                <a href="{{route('profile.index')}}" class="btn btn-block bg-gradient-warning text-white py-3">

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-lg">Add Your Wallet Address</div>
                        <div>
                            <i class="fas fa-arrow-right text-lg"></i>
                        </div>
                    </div>

                </a>

                <div class="mt-5">
                    <div class="card card-stats bg-gradient-indigo text-white">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-white text-uppercase text-muted mb-0">Available Balance</h5>
                                    <span class="h2 text-white font-weight-bold mb-0">{{auth()->user()->fund->available}} $</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="card card-stats bg-alternate">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Earn with Referral</h5>
                                    <p class="text-justify mt-2">
                                        Invite your partners and receive a bonus - 5% of the value of contribution and 0.3% daily bonus of the value of contribution
                                    </p>
                                    <div class="d-flex">
                                        <input class="form-control" type="text" value="{{url('register')."?ref=".auth()->user()->id}}" id="referLink" readonly />
                                        <button onclick="copyToClipboard()" class="btn btn-primary"> <i class="fa fa-copy"></i> </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                <a href="#" class="btn btn-block bg-gradient-default text-white py-3">

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-lg">Make your first Investment</div>
                        <div>
                            <i class="fas fa-arrow-right text-lg"></i>
                        </div>
                    </div>

                </a>

            </div>
        </div>


    </div>



@endsection


@push('js')

    <script>
        function copyToClipboard() {
            const copyText = document.getElementById("referLink");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }

    </script>

@endpush
