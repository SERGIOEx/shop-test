@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>Checkout</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">1</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ $product->name }}</h6>
                        <small class="text-muted">{{ $product->brand->name ?? '-' }}</small>
                    </div>
                    <span class="text-muted">$ {{ $product->price }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$ {{ $product->price }}</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            {!! Form::open(['method' => 'POST', 'route' => ['confirmCheckout']]) !!}
            @csrf
            <div class="mb-3">
                <div class="form-group">
                    {!! Form::label('client_name', 'Your name *', ['class' => 'control-label']) !!}
                    {!! Form::text('client_name', null, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    @if($errors->has('client_name'))
                        <p class="text-danger">
                            {{ $errors->first('client_name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="mb-3">
                <div class="form-group">
                    {!! Form::label('client_address', 'Address *', ['class' => 'control-label']) !!}
                    {!! Form::text('client_address', null, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    @if($errors->has('client_address'))
                        <p class="text-danger">
                            {{ $errors->first('client_address') }}
                        </p>
                    @endif
                </div>
            </div>

            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""
                    >
                    <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input">
                    <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input">
                    <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="">
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="">
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="">
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            {!! Form::hidden('product_id', $product->id) !!}

            {!! Form::submit('Buy Now', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
