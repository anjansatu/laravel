<p>A deposit has been approved.</p>
<p>User: {{ $deposit->user->username }} ({{ $deposit->user->email }})</p>
<p>Amount: ${{ number_format($deposit->amount, 2) }}</p>
<p>Approved At: {{ $deposit->updated_at }}</p>
