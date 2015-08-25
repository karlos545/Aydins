@extends('layouts.admin')

@section('content')

    <div class="container">

        <h1>Edit Menu</h1>
        <hr>

        <ul class="nav nav-tabs">
            <li role="navigation" class="active"><a href="#">Categories</a></li>
            <li role="navigation"><a href="#">Salads</a></li>
            <li role="navigation"><a href="#">Sauces</a></li>
            <li role="navigation"><a href="#">Toppings</a></li>
        </ul>
        <div class="row">
            <div class="col-md-6">
                <h2>Create a Category</h2>
                @include('/partials._forms.categories')
            </div>
            <div class="col-xs-12">
                @include('errors._form_errors')
                @if(count($categories) !== 0)
                <hr>
                <h2>Existing Categories</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr class="lead">
                        <th>Category</th>
                        <th>View Items </th>
                        <th>Add Items </th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($categories as $category)
                            <tr>
                                <td class="cell-center lead">
                                    {{ $category->name }}
                                    @if(session()->has('updated') & $category->name == session('updated'))
                                        <span class="label label-success">Updated!</span>
                                    @endif
                                    @if(session()->has('new') & $category->name == session('new'))
                                        <span class="label label-success">New!</span>
                                    @endif
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['categories.show',$category->id], 'method' => 'GET']) !!}
                                    <button class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-th-list"></span> View Category Items</button>
                                    {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['products.create', $category->id], 'method' => 'GET']) !!}
                                    <input type="hidden" name="cat_id" value="{{$category->id}}">
                                    <button class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-plus-sign"></span> Add item to Category</button>
                                    {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                                    <div class="input-group input-group-lg">
                                        {!!Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Enter a Category Name'])!!}
                                        <span class="input-group-btn">
                                          <button class="btn btn-info btn-lg edit-cat"><span class="glyphicon glyphicon-edit"></span> Edit Name</button>
                                        </span>
                                    </div>
                                    {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-warning-sign"></span> Delete</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
                @else
                    <tr><h2 class="text-primary">There aren't any categories in the database... Create One :) </h2></tr>
                @endif
                {!! $categories->render()!!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @include('partials.flash')
    @stop