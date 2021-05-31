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
                <div>Withdrawal Request</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#TRX NO</th>
                            <th>Amount</th>
                            <th class="text-center">Withdrawal address</th>
                            <th class="text-center">Withdrawal Currency</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">User</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $key=>$trx)
                            <tr>
                                <td class="text-center text-muted">{{ $trx->trx_id }}</td>
                                <td class="text-center">
                                    {{$trx->amount}}
                                </td>
                                <td class="text-center">
                                    {{$trx->user->wallet[$trx->currency]}}
                                </td>
                                <td class="text-center">
                                    {{$trx->currency}}
                                </td>
                                <td class="text-center">{{ $trx->status }}</td>
                                <td class="text-center">{{ $trx->user->first_name.' '.$trx->user->last_name }}</td>
                                <td class="text-center">
                                    {{$trx->user->email}}
                                </td>
                                <td class="text-center">{{ $trx->created_at }}</td>
                                <td>
                                    <form action="{{route('app.withdraw.complete',$trx->id)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-success"> Complete </button>
                                    </form>
                                    <form action="{{route('app.withdraw.cancel',$trx->id)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-danger"> Cancel </button>
                                    </form>
                                </td>

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
            $("#datatable").DataTable();
        });
    </script>
@endpush
