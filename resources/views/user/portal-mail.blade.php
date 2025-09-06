@extends('user.master')

@section('user-content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-grey shadow-lg">
                <div class="card-header text-center">Portal Mails</div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-colorful">
                            <thead class="table-light">
                                <tr>
                                    <th>Email</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mails as $mail)
                                <tr>
                                    <td>{{ $mail->email }}</td>
                                    <td>${{ number_format($mail->price, 2) }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('portal-mail.purchase') }}">
                                            @csrf
                                            <input type="hidden" name="mail_id" value="{{ $mail->id }}">
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
