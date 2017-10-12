@extends('layouts.public')

@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Logowanie</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">

    <div class="row">
        <div class="col-md-12">

            <div class="featured-boxes">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="featured-box featured-box-primary align-left mt-xlg">
                            <div class="box-content">
                                <h4 class="heading-primary text-uppercase mb-md">Posiadam już konto</h4>
                                <form action="{{ route('login') }}" id="frmSignIn" method="post">
                                   {{ csrf_field() }}
                                   <div class="row">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <label for="email">Adres E-Mail</label>
                                            <input id="email" type="email" value="{{ old('email') }}" name="email" class="form-control input-lg" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <a class="pull-right" href="{{ route('password.request') }}">(Zapomniałeś hasła?)</a>
                                            <label for="password">Hasło</label>
                                            <input id="password" type="password" value="" name="password" class="form-control input-lg" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="remember-box checkbox">
                                            <label for="rememberme">
                                                <input type="checkbox" id="rememberme" name="rememberme" {{ old('remember') ? 'checked' : '' }}>Zapamiętaj mnie
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" value="Zaloguj się" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="featured-box featured-box-primary align-left mt-xlg">
                        <div class="box-content">
                            <h4 class="heading-primary text-uppercase mb-md">Zarejestruj się</h4>
                            <form action="{{ route('register') }}" id="frmSignUp" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <label for="name">Imię</label>
                                            <input id="name" type="text" value="{{ old('name') }}" name="name" class="form-control input-lg" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <label for="email">Adres E-Mail</label>
                                            <input id="email" type="text" value="{{ old('email') }}" name="email" class="form-control input-lg" required>
                                            
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <label form="password">Hasło</label>
                                            <input id="password" type="password" value="" class="form-control input-lg"  name="password" required>
                                            
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password-confirm">Powtórz hasło</label>
                                            <input id="password-confirm" type="password" value="" class="form-control input-lg" name="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Zarejestruj się" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</div>

</div>
@endsection
