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
                <div>{{ $meta['title'] }}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div style="display: block;width: 100%;overflow-x: scroll;">
                    <table id="datatable" class="display responsive align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">User ID</th>
                            <th>Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Available Funds</th>
                            <th class="text-center">Replenished</th>
                            <th class="text-center">Withdrawn</th>
                            <th class="text-center">Transferred Funds</th>
                            <th class="text-center">Active Investments</th>
                            <th class="text-center">Active deposits</th>
                            <th class="text-center">Deposit Income</th>
                            <th class="text-center">Funds Transfers Received</th>
                            <th class="text-center">Partners Turnover</th>
                            <th class="text-center">Daily Income</th>
                            <th class="text-center">Earned From Partners</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($funds as $fund)
                            <tr>
                                <td class="text-center text-muted">{{ $fund->user_id }}</td>
                                <td class="text-center">
                                    {{$fund->user->first_name .' '.$fund->user->last_name}}
                                </td>
                                <td class="text-center">{{ $fund->user->email }}</td>
                                <td class="text-center">{{ $fund->available }}</td>
                                <td class="text-center">{{ $fund->replenished }}</td>
                                <td class="text-center">{{ $fund->withdrawn }}</td>
                                <td class="text-center">{{ $fund->transfered_fund }}</td>
                                <td class="text-center">{{ $fund->active_investments }}</td>
                                <td class="text-center">{{ $fund->active_deposits }}</td>
                                <td class="text-center">{{ $fund->deposit_income }}</td>
                                <td class="text-center">{{ $fund->fund_transfers_received }}</td>
                                <td class="text-center">{{ $fund->partners_turnover }}</td>
                                <td class="text-center">{{ $fund->daily_income }}</td>
                                <td class="text-center">{{ $fund->earned }}</td>
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
