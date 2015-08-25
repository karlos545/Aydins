<div class="checkbox">
	<label>
		<input type="checkbox"> Salad
	</label>
</div>

<div class="checkbox">
	<label>
		<input type="checkbox"> Sauce
	</label>
</div>
<div class="checkbox">
	<label>
		<input type="checkbox"> Toppings
	</label>
</div>
<div class="checkbox">
	<label>
		<input type="checkbox"> Cheese
	</label>
</div>
<div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" aria-label="...">
      </span>
	<input type="text" class="form-control" aria-label="...">
</div><!-- /input-group -->
<hr>
{!! Form::submit('Next (Step 3 of 3)', ['class' => 'btn btn-primary btn-lg']) !!}
</div>



{!! Form::close() !!}