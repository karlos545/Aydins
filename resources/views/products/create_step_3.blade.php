@inject('getProduct', 'App\Products\getProduct')
<!--insert getSides method-->
@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Add Extras</h1>
        <hr>
        <div class="alert alert-info">
            <p class="alert-info">
                <strong>Please Note!</strong> these are options you want to give the customer when they are placing an order online the menu
            </p>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>{{$getProduct->getProduct($product->product_id)->name}}:</h2>
            </div>
            <div class="col-md-6">

            </div>
        </div>

@endsection