@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-8 col-md-9">
        <h2>Register</h2>
        @include('/partials/_register')
        </div>
        <div class="col-sm-4 col-md-3 top-buffer">
        @include('/partials/_login')
        </div>



    </div>

@endsection