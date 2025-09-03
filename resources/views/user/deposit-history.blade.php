@extends('user.master')

@section('user-content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-grey shadow-lg">
                <div class="card-header text-center">Deposit History</div>
                <div class="card-body">
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
                                @forelse($deposits as $deposit)
                                <tr>
                                    <td>{{ $deposit->address }}</td>
                                    <td>${{ number_format($deposit->amount, 2) }}</td>
                                    <td>{{ $deposit->currency }}</td>
                                    <td>{{ $deposit->created_at }}</td>
                                    <td>
                                        <span class="badge {{ $deposit->status === 'completed' ? 'bg-success' : ($deposit->status === 'pending' ? 'bg-warning' : 'bg-danger') }}">
                                            {{ ucfirst($deposit->status) }}
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">No deposits found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
