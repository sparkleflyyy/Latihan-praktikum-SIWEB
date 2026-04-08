@extends('layouts.main')

@section('title','Admin - Products')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Manage Products</h2>
    <a href="/products/create" class="btn btn-primary">Add Product</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Categories</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>Rp {{ number_format($p->price ?? 0,0,',','.') }}</td>
            <td>
                @foreach($p->categories as $c)
                    <span class="badge bg-secondary">{{ $c->name }}</span>
                @endforeach
            </td>
            <td>
                <a href="/products/{{ $p->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                <form action="/products/{{ $p->id }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete product?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
