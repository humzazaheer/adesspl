@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ad-orangeGradient white-text text-center py-4 font-weight-bold">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="md-form">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="md-form">

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <label for="password">{{ __('Password') }}</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="md-form">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                        </div>
                        <button type="submit" class="btn ad-orangeGradient d-table mx-auto">
                            {{ __('Reset Password') }}
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
