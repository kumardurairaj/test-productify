<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="product-list">
    <div class="pt-25">PRODUCT LISTS</div>
</div>
<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2>{{ $product->name }}</h2>
                    <p class="card-text">{{ $product->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-sm btn-outline-secondary btn-buy-now">Buy Now</a>
                        </div>
                        <small class="text-muted">Rs.{{ $product->price }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection