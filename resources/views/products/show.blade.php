<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="product-list">
    <div class="pt-25">ORDER SUMMARY</div>
</div>
<div class="col-lg-12" style="display:flex">
    <div class="col-lg-6 container">
        <div class="card">
            <div class="summary-header-color">Order Details</div>
            <div class="card-body">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Price: Rs.{{ $product->price }}</p>
            </div>
        </div>
    </div>

    <!-- Modal for Stripe credit card form -->
    <div class="col-lg-6" id="stripeForm">
        <div>
            <div class="modal-content">
                <div class="summary-header-color">Price Details</div>
                <div class="modal-header">
                    <h5 class="modal-title">Enter Card Details</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('checkout') }}" method="post" id="stripeForm">
                        @csrf
                        <div class="form-group">
                            <label for="card-element">
                                Credit or debit card
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection