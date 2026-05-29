@extends('layouts.app')

@section('title', 'Data Produk')

@section('content')
<h1>Daftar Produk</h1>

@if (empty($products))
<p>Tidak ada produk.</p>
@else
<ul>
    @foreach ($products as $product)
    <li>{{ $product }}</li>
    @endforeach
</ul>
@endif
@endsection
