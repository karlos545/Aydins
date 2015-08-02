@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories:</h1>

    @foreach($categories as $category)
        <div class="col-md-3 col-sm-4 col-xs-2 text-center alert alert-danger">
            <h1>{{$category->name}}</h1>
        </div>
    @endforeach
</div>
@endsection