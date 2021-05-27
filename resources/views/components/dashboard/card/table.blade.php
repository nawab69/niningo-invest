<div class="card">
    <!-- Card header -->
    <div class="card-header border-0">
        <h3 class="mb-0">Online financial operations:</h3>
    </div>
    <!-- Light table -->
    <div class="table-responsive" data-toggle="list" data-list-values='["trx_id", "amount", "status", "users","date"]'>
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="trx_id">TRX NO</th>
                <th scope="col" class="sort" data-sort="amount">Amount</th>
                <th scope="col" class="sort" data-sort="status">Status</th>
                <th scope="col" data-sort="users">User</th>
                <th scope="col" class="sort" data-sort="date">Date</th>

            </tr>
            </thead>
            <tbody class="list">

            @foreach($transactions as $tx)
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">{{$tx->trx_id}}</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    ${{$tx->amount}}
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">{{$tx->status}}</span>
                      </span>
                </td>
                <td>
                    <span>{{$tx->user->first_name.' '.$tx->user->last_name}}</span>
                </td>
                <td>
                    {{\Carbon\Carbon::parse($tx->created_at)->toDateString()}}
                </td>

            </tr>

            @endforeach
            </tbody>
        </table>
    </div>
    <!-- Card footer -->
    <div class="card-footer py-4">
            {{$transactions->links()}}
    </div>
</div>
