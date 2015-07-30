    <div class="well">
              <h2 class="line-height-1">Log In</h2>
          {!! Form::open(['url' => 'auth/login']) !!}
          <div class="form-group">
              {!!Form::label('email', 'Email Address', ['class' => 'control-label']) !!}
              {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter an Email Address'])!!}
          </div>
          <div class="form-group">
              {!!Form::label('password', 'Password', ['class' => 'control-label']) !!}
              {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter a password'])!!}
          </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="remember" id="remember"> Remember login
                  </label>
                  <p class="help-block">(if this is a private computer)</p>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <a href="#" class="btn btn-default btn-block">Forgot your password?</a>
          </form>
      </div>