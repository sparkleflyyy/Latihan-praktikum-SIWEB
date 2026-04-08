@extends('layouts.main')

@section('title','Cart')

@section('content')
<h2>Your Cart</h2>
@if(count($cart) == 0)
    <p>Your cart is empty.</p>
@else
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart as $id => $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>Rp {{ number_format($item['price'] ?? 0,0,',','.') }}</td>
            <td><a href="/cart/remove/{{ $id }}" class="btn btn-sm btn-danger">Remove</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
