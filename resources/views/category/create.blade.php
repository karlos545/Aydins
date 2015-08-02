@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Create a Category:</h1>
               {!! Form::open() !!}
                <div class="form-group">
                    {!!Form::label('name', 'Category Name', ['class' => 'control-label']) !!}
                    {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter a Category Name'])!!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection