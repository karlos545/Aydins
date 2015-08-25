    <h2>Current {{$product->name}}s:</h2>
    <table class="table table-bordered">
        <thead>
        <tr class="lead">
            <th>Size</th>
            <th>Price</th>
            <th>Active</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

            @foreach($items as $item)
                <tr>
                    <td class="cell-center lead">
                        {{ $item->size }}
                    </td>
                    <td class="cell-center lead">
                        {{ $item->price }}
                    </td>
                    <td class="cell-center lead">
                        {{ $item->active }}
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
    </table>
