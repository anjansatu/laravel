@extends('user.master')

@section('user-content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-grey shadow-lg">
                <div class="card-header text-center">SSNs</div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-colorful">
                            <thead class="table-light">
                                <tr>
                                    <th>SSN</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ssns as $ssn)
                                <tr>
                                    <td>{{ $ssn->ssn }}</td>
                                    <td>${{ number_format($ssn->price, 2) }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('ssn.purchase') }}">
                                            @csrf
                                            <input type="hidden" name="ssn" value="{{ $ssn->ssn }}">
                                            <input type="hidden" name="price" value="{{ $ssn->price }}">
                                            <button class="btn btn-success btn-sm">Purchase</button>
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
    </div>
</div>
@endsection
