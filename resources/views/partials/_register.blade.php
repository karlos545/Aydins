
        <div class="row">
          {!! Form::open(array('url' => '/auth/register')) !!}

              <div class="form-group col-sm-6">
                      {!!Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
                      {!!Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter a First Name'])!!}
              </div>
                <div class="form-group col-sm-6">
                    {!!Form::label('second_name', 'Second Name', ['class' => 'control-label']) !!}
                    {!!Form::text('second_name', null, ['class' => 'form-control', 'placeholder' => 'Enter a SecondName'])!!}
                </div>

                <div class="form-group col-sm-6 ">
                    {!!Form::label('email', 'Email Address', ['class' => 'control-label']) !!}
                    <span class="text-danger">{!!  $errors->first('email') !!}</span>
                    {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter an Email Address'])!!}
                </div>

                <div class="form-group col-sm-6">
                    {!!Form::label('email_conf', 'Email Address Confirmation', ['class' => 'control-label']) !!}
                    {!!Form::text('email_confirmation', null, ['class' => 'form-control', 'placeholder' => 'Confirm Your Email Address'])!!}
                </div>

                <div class="form-group col-sm-6">
                    {!!Form::label('password', 'Password', ['class' => 'control-label']) !!}
                    {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter a password'])!!}
                </div>
                <div class="form-group col-sm-6">
                    {!!Form::label('password_confirmation', 'Password', ['class' => 'control-label']) !!}
                    {!!Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm your password'])!!}
                </div>

            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              {!! Form::close()!!}
        </div>
