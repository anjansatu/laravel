@extends('user.master')

@section('user-content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <h2 class="mb-4 text-center">Deposit History</h2>
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-colorful">
                            <thead class="table-light">
                                <tr>
                                    <th>Address</th>
                                    <th>Amount</th>
                                    <th>Currency</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deposits as $deposit)
                                <tr>
                                    <td>{{ $deposit->address }}</td>
                                    <td>{{ $deposit->amount }}</td>
                                    <td>{{ $deposit->currency }}</td>
                                    <td>{{ $deposit->created_at }}</td>
                                    <td>{{ $deposit->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
