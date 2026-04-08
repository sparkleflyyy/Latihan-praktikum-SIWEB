@extends('layouts.main')

@section('title','Home')

@section('content')
<h2>Products</h2>
<div class="row">
    @foreach($products as $p)
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $p->name }}</h5>
                <p class="card-text">Price: Rp {{ number_format($p->price ?? 0, 0, ',', '.') }}</p>
                <p class="card-text">Categories:
                    @foreach($p->categories as $c)
                        <span class="badge bg-secondary">{{ $c->name }}</span>
                    @endforeach
                </p>
                <a href="/cart/add/{{ $p->id }}" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
