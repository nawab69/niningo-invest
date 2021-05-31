@extends('layouts.dashboard.app')

@section('content')

<div class="container">



<x-dashboard.card.fund />

<div class="row mt-5">
    <div class="col-md-12 col-lg-8">
        {{-- Table --}}

        <div class="row">
            <div class="col">
                <x-dashboard.card.table />
            </div>
        </div>

        {{-- Open deposits --}}

        {{-- Registered user and open deposit --}}

        {{-- Financial stat --}}
    </div>

    <div class="col-md-12 col-lg-4">

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


        <a href="{{route('invest')}}" class="btn btn-block bg-gradient-default text-white py-3">

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
