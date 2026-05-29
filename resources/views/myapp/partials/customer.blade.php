<h2>DATA CUSTOMER</h2>
@if ($customers->isEmpty())
    <p>Tidak ada data customer.</p>
@else
    @foreach ($customers as $customer)
        <hr>
        <b>ID:</b> {{ $customer->id }}<br>
        <b>Nama:</b> {{ $customer->name }}<br>
        <b>Email:</b> {{ $customer->email }}<br>
        <b>Telepon:</b> {{ $customer->phone }}<br>
        <b>Alamat:</b> {{ $customer->address }}
        <br>
    @endforeach
@endif
