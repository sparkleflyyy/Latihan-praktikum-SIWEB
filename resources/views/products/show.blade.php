@extends('layouts.main')

@section('title', $product->name)

@section('content')
<h2>{{ $product->name }}</h2>
<p>Price: Rp {{ number_format($product->price ?? 0,0,',','.') }}</p>
<p>Categories:
@foreach($product->categories as $c)
    <span class="badge bg-secondary">{{ $c->name }}</span>
@endforeach
</p>
<a href="/cart/add/{{ $product->id }}" class="btn btn-primary">Add to Cart</a>
@endsection
