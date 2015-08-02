@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Contact Us</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a href="tel:01492514449" class="btn btn-primary btn-block btn-lg"><span class="glyphicon glyphicon-phone-alt "></span> Call Aydins</a>
                <h2>Contact Information</h2>
                <ul class="media-list">
                    <li>Address Line 1</li>
                    <li>Address Line 2</li>
                    <li>Town</li>
                    <li>Postcode</li>
                    <li>01492</li>
                </ul>
            </div>
            <div class="col-md-6">
                <a href="tel:01492514449" class="btn btn-primary btn-block btn-lg"><span class="glyphicon glyphicon-map-marker"></span> Take Me To Aydins</a>
                <h1>BIG MAP</h1>
            </div>
        </div>
    </div>

@endsection