
		<div class="form-group">
			{!! Form::label('size', 'Size:', ['class' => 'control-label']) !!}
			{!! Form::text('size',null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group ">

			{!! Form::label('price', 'Price:', ['class' => 'control-label']) !!}
			<div class="input-group">
				<span class="input-group-addon btn-primary">&pound;</span>
				{!! Form::text('price',null, ['class' => 'form-control input-group']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('active', 'Active:', ['class' => 'control-label']) !!}
			<select class="form-control" name="active" id="active">
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
			<hr>
		</div>
