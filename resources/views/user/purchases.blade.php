@extends('user.master')

@section('title', 'Purchases')

@section('user-content')
<div class="container section-padding">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Portal Mail Purchases</h3></div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr><th>Email</th><th>Price</th><th>Date</th></tr>
                        </thead>
                        <tbody>
                            @forelse($purchases->where('type','mail') as $purchase)
                                <tr>
                                    <td>{{ $purchase->item }}</td>
                                    <td>{{ $purchase->price }}</td>
                                    <td>{{ $purchase->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="text-center">No purchases</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">SSN Purchases</h3></div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr><th>SSN</th><th>Price</th><th>Date</th></tr>
                        </thead>
                        <tbody>
                            @forelse($purchases->where('type','ssn') as $purchase)
                                <tr>
                                    <td>{{ $purchase->item }}</td>
                                    <td>{{ $purchase->price }}</td>
                                    <td>{{ $purchase->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="text-center">No purchases</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
