@extends('layouts.backend.app')

@section('title','Transactions')ß

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Investment Plan</div>
            </div>
        </div>
    </div>

    @php

        $plans = \App\Models\Plan::all();

    @endphp

    <div class="row">
        <div class="col-md-12">
            <div class="main-card card px-5 py-5">
                <div class="card-header">
                    <div class="card-title">
                        Update Plan
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('app.changePlan')}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label class="col-4" for="month">Month (Term)</label>
                            <select  name="month" id="month" class="form-control col-8">
                                @foreach($plans as $plan)
                                    <option value="{{$plan->month}}">{{$plan->month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="percent">Percent</label>
                            <input type="number" min="1" max="100" name="percent" id="percent" class="form-control col-8" value="10"/>
                        </div>

                        <button type="submit" class="btn btn-success btn-lg"> Update </button>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <div class="row mt-5">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div style="display: block;width: 100%;overflow-x: scroll;">
                    <table id="datatable" class="display responsive align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Month</th>
                            <th class="text-center">Percent</th>

                        </tr>
                        </thead>
                        <tbody>


                        @foreach($plans as $plan)
                            <tr>
                                <td class="text-center">{{ $plan->month}}</td>

                                <td class="text-center">{{ $plan->percent }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Datatable
            $("#datatable").DataTable(
                {
                    responsive: true
                }
            );
        });
    </script>
@endpush
