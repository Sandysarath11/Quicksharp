@extends('layouts.app')

@section('content')
<div class="container">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <label for="name" class="">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control h-50 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-2">
                    <label for="email" class="">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control h-50 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-2">
                    <label for="password" class="">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control h-50 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="col-lg-2 col-md-2">
                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control h-50" name="password_confirmation" required autocomplete="new-password">
                </div>
        </div>
        <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
        </div>
        </form>

</div>

@endsection
