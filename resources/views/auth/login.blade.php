@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
        @if ($errors->has('email'))
            <label class="control-label" for="email"><i class="fa fa-times-circle-o"></i> {{ $errors->first('email') }}</label>
        @endif
        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
        @if ($errors->has('password'))
            <label class="control-label" for="password"><i class="fa fa-times-circle-o"></i> {{ $errors->first('password') }}</label>
        @endif
        <input id="password" type="password" class="form-control" name="password" placeholder="Пароль" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Войти</button>
        </div>
        <!-- /.col -->
    </div>
</form>

@endsection
