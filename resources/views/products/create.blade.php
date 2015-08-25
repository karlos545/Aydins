@extends('layouts.admin')

@section('content')


    <div class="container">

        <h1>Add Item To {{$category->name}}</h1>
        <hr>
        <div class="alert alert-info">
            <p class="alert-info">
                <strong>Please Note!</strong> When you create this product you will have to further create versions to apply them to the menu
            </p>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>Create:</h2>
                @include('partials._forms.products')

            </div>
            <div class="col-md-6">
                <h2>Current {{$category->name}}:</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr class="lead">
                        <th>Item</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($products) !== 0)

                        @foreach($products as $product)
                            <tr>
                                <td class="cell-center lead">
                                    {{ $product->name }}
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['products.update', $product->id], 'method' => 'GET']) !!}
                                          <button class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-edit"></span>Edit</button>
                                    {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-warning-sign"></span> Delete</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                    @endforeach
                    @else
                        <h2>I looks like you don't have any items in the {{$category->name}} category yet.</h2>
                @endif
                </table>
            </div>
        </div>

@endsection