<div class="panel panel-default">
    <div class="panel-heading">Register As Teacher</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('register.teacher') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                <label for="user_name" class="col-md-4 control-label">User Name</label>

                <div class="col-md-6">
                    <input id="user_name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" required autofocus>

                    @if ($errors->has('user_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('user_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                <label for="date_of_birth" class="col-md-4 control-label">Date Of Birth</label>

                <div class="col-md-6">
                    <input id="date_of_birth" type="date_of_birth" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" required>

                    @if ($errors->has('date_of_birth'))
                        <span class="help-block">
                            <strong>{{ $errors->first('date_of_birth') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('school_name') ? ' has-error' : '' }}">
                <label for="school_name" class="col-md-4 control-label">School Name</label>

                <div class="col-md-6">
                    <input id="school_name" type="school_name" class="form-control" name="school_name" value="{{ old('school_name') }}" required>

                    @if ($errors->has('school_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('school_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                <label for="position" class="col-md-4 control-label">Position</label>

                <div class="col-md-6">
                    <input id="position" type="text" class="form-control" name="position" value="{{ old('position') }}" required>

                    @if ($errors->has('position'))
                        <span class="help-block">
                            <strong>{{ $errors->first('position') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>