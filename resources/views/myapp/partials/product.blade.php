<h2>DATA PRODUCT</h2>
@if ($products->isEmpty())
    <p>Tidak ada data product.</p>
@else
    @foreach ($products as $product)
        <hr>
        <b>ID:</b> {{ $product->id }}<br>
        <b>Nama:</b> {{ $product->name }}<br>
        <b>Harga:</b> Rp {{ number_format($product->price, 0, ',', '.') }}<br>
        <b>Deskripsi:</b> {{ $product->description }}
        <br>
    @endforeach
@endif
