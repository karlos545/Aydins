{!! Form::open(array('route' => 'products.store','files' => true, 'method' => 'POST')) !!}
		<div class="form-group">
			{!! Form::label('name', 'Product Name:', ['class' => 'control-label']) !!}
			{!! Form::text('name',null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('category', 'Category:',['class' => 'control-label']) !!}
			{!! Form::text('category',$category->name, ['class' => 'form-control disabled', 'disabled']) !!}
			{!! Form::hidden('category_id',$category->id) !!}
		</div>
		<div class="form-group">
			{!! Form::label('desc', 'Brief Description:',['class' => 'control-label']) !!}
			{!! Form::textarea('desc',null, ['class' => 'form-control']) !!}
		</div>

			<div class="form-group">
				{!!Form::label('img', 'Image:', ['class' => 'control-label']) !!}
				{!!Form::file('img',['class' => 'form-control'])!!}
			</div>

			<hr>
			<div class="alert alert-info">
				These are extras you want your customers to be able to order with this item from the menu.
			</div>
				<label id="extras">Extras:</label><br>
					<input name="extras" value="none" checked type="radio"> None <br>
					<input name="extras" value="salad" type="radio"> Sauce <br>
					<input name="extras" value="salad" type="radio"> Salad &amp; Sauce <br>
					<input name="extras" value="toppings" type="radio"> Toppings <br>
			<hr>
			{!! Form::submit('Create Product', ['class' => 'btn btn-primary btn-lg']) !!}




{!! Form::close() !!}