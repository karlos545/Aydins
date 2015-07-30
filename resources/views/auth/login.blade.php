@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            @include('/partials/_login')
            <div class="well">

                <a href="/auth/register" class="btn btn-primary btn-block">Register</a>
            </div>
        </div>
        </div>



    </div>

@endsection