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
                            <th class="text-center">Percent</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Profit type</th>
                            <th class="text-center">Start Date</th>
                            <th class="text-center">End Date</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Next Profit Date</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invests as $fund)
                            <tr>
                                <td class="text-center text-muted">{{ $fund->user_id }}</td>
                                <td class="text-center">
                                    {{$fund->user->first_name .' '.$fund->user->last_name}}
                                </td>
                                <td class="text-center">{{ $fund->user->email }}</td>
                                <td class="text-center">{{ $fund->percent }}</td>
                                <td class="text-center">{{ $fund->amount }}</td>
                                <td class="text-center">{{ $fund->profit_type }}</td>
                                <td class="text-center">{{ $fund->start_date }}</td>
                                <td class="text-center">{{ $fund->end_date }}</td>
                                <td class="text-center">{{ $fund->status }}</td>
                                <td class="text-center">{{ $fund->next_profit_date }}</td>
                                <td class="text-center"><a href="#" class="btn btn-danger">Hold</a></td>
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
