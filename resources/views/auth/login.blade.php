@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="columns col-gapless">
            <div class="column col-5 bg-primary">
                col-5
            </div>
            <div class="column col-7 ">
                <div class="columns">
                    <div class="column col-7 col-mx-auto">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                            <div class="columns">
                                <div class="column col-5 col-mx-auto">
                                    <div class="form-group ">
                                        <label for="email" class="form-label" style="display: none;">{{ __('E-Mail Address') }}</label>

                                        <input placeholder="E-Mail Adresse" id="email" type="email" class="form-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="column col-5 col-mx-auto">
                                    <div class="form-group">
                                        <label style="display: none;" for="password" class="form-label">{{ __('Password') }}</label>
                                        <input placeholder="Passwort" id="password" type="password" class="s-rounded form-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column col-3 col-mx-auto">
                                    <label class="form-checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><i class="form-icon"></i> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column col-4 col-mx-auto">
                                    <button type="submit" class="btn  input-group-btn btn-block">
                                        {{ __('Login') }}
                                    </button>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Passwort vergessen?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

                    <div class="form-group row">

                        <div class="col-md-6">

                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-6">

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">

                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">


                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
