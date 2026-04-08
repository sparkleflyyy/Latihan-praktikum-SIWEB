@extends('layouts.main')

@section('title','Edit Product')

@section('content')
<h2>Edit Product</h2>
<form action="/products/{{ $product->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Categories</label>
        <select name="categories[]" multiple class="form-control">
            @foreach($categories as $c)
                <option value="{{ $c->id }}" {{ in_array($c->id, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $c->name }}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
