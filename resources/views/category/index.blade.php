@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Create a Category:</h1>
                    {!! Form::open(array('route' => 'category.store')) !!}
                    <div class="input-group input-group-lg">
                        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter a Category Name'])!!}
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus-sign"></span> Create Category</button>
                        </span>
                    </div>
                    {!! Form::close() !!}

                </div>

            </div>

                @if(session()->has('deleted'))
                    <div class="alert alert-danger col-sm-6 margin-top-15" role="alert">
                        <p class="lead">The {{session('deleted')}} category was <strong>Deleted</strong></p>
                    </div>
                @endif

        <div class="row">
            <div class="col-xs-12">
                <h2>Categories:</h2>
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
                    @if(count($categories) !== 0)
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
                                    {!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-th-list"></span> View Category Items</button>
                                    {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-plus-sign"></span> Add item to Category</button>
                                    {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['category.update', $category->id], 'method' => 'PATCH']) !!}
                                    <div class="input-group input-group-lg">
                                        {!!Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Enter a Category Name'])!!}
                                        <span class="input-group-btn">
                                          <button class="btn btn-info btn-lg edit-cat"><span class="glyphicon glyphicon-edit"></span> Edit Name</button>
                                        </span>
                                    </div>
                                        {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-warning-sign"></span> Delete</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr><h2 class="text-primary">There aren't any categories in the database... Create One :) </h2></tr>
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <script>
            //document.querySelector('td.edit button.edit-cat').onclick = function(){
            swal({   title: "Change Category Name",
                text: "Write something interesting:",
                type: "input",
                showCancelButton: true,
                closeOnConfirm: false,
                animation: "slide-from-top",
                inputPlaceholder: "Write something" },
                    function(inputValue){   if (inputValue === false) return false;
                        if (inputValue === "") {
                            swal.showInputError("You need to write something!");
                            return false   }
                        swal("Nice!", "You wrote: " + inputValue, "success"); });}
        </script>

@endsection