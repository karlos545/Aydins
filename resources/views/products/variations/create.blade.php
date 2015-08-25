@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add {{$product->name}} to the menu</h1>
    {!! Form::open(array('route' => 'product_map.store')) !!}

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {!!Form::label('size', 'Size:', ['class' => 'control-label']) !!}
                {!!Form::select('size', ['S' => 'Small','M' => 'Medium','L' => 'Large','XL' => 'Extra Large','7' => '7"','10' => '10"','12' => '12"','14' => '14"'],null, ['class' => 'form-control', 'placeholder' => 'Enter a Size'])!!}
            </div>
        </div>
        <div class="col-md-3">

            <div class="form-group">
                {!!Form::label('price', 'Price:', ['class' => 'control-label']) !!}
                {!!Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Enter a Price'])!!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!Form::label('active', 'Apply to Menu:', ['class' => 'control-label']) !!}
                {!!Form::select('active', ['1' => 'Yes','0'=>'No'],null, ['class' => 'form-control'])!!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!Form::label(' ', '', ['class' => 'control-label']) !!}
                {!! Form::submit('Create '.$product->name, ['class' => 'form-control btn btn-primary btn-block']) !!}
            </div>
            {!! Form::hidden('product_id', $product->id) !!}
        </div>
    </div>

    {!! Form::close() !!}


    @include('partials._lists._list_items')
</div>
@stop