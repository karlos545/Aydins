@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Set Price and Size</h1>
        <hr>
        <div class="alert alert-info">
            <p class="alert-info">
                <strong>Please Note!</strong> When you set the active option to "Yes" the {{$product->name}} will go straight on to the menu
            </p>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>{{$product->name}}:</h2>
            </div>
            <div class="col-md-6">

            </div>
        </div>

@endsection