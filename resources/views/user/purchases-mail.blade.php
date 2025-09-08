@extends('user.master')

@section('title', 'Gmail Purchases')

@section('user-content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-grey shadow-lg">
                <div class="card-header text-center">Gmail Purchases</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover mb-0 table-colorful">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($purchases as $purchase)
                                    <tr>
                                        <td>{{ $purchase->item }}</td>
                                        <td>${{ number_format($purchase->price, 2) }}</td>
                                        <td>{{ $purchase->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No purchases</td>
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

