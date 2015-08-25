{!! Form::open(array('route' => 'categories.store')) !!}
<div class="input-group input-group-lg">
	{!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter a Category Name'])!!}
	<span class="input-group-btn">
		<button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus-sign"></span> Create Category</button>
	</span>
</div>
{!! Form::close() !!}
