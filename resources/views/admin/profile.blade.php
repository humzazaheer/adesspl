@extends('admin.base')

@section('content')
    <div class="container">
        @if($msg = Session::get('success'))
            <div id="toast-container">
                <div class="md-toast md-toast-success col-md-8 mx-auto my-5">
                    <div class="md-toast-message">{{$msg}}</div>
                </div>
            </div>
        @endif

        <div class="row justify-content-center my-5">

            <div class="col-md-8">
                <div class="card">
                    <div
                        class="card-header ad-orangeGradient white-text text-center py-4 font-weight-bold">Personal Information</div>

                    <div class="card-body pb-5">
                        <form class="text-center" style="color: #757575;" method="POST"
                              action="{{ route('updateProfile') }}">
                            @csrf
                            @method('put')
                            <div class="md-form">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ Auth::user()->name }}" required autofocus>
                                <label for="name">{{ __('Name') }}</label>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="md-form">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ Auth::user()->email }}" disabled>
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <button type="submit" class="btn ad-orangeGradient">
                                Update
                            </button>

                        </form>
                    </div>
                </div>

                <div class="card my-5">
                    <div
                        class="card-header ad-orangeGradient white-text text-center py-4 font-weight-bold">Change Password</div>

                    <div class="card-body pb-5">
                        <form class="text-center" style="color: #757575;" method="POST"
                              action="/admin/profile/{{\Illuminate\Support\Facades\Auth::user()->id}}">
                            @csrf
                            @method('put')
                            <div class="md-form">
                                <input id="password" type="password"
                                       class="form-control @if(Session::get('current_password')) is-invalid @endif" name="current_password"
                                       required>
                                <label for="password">Current Password</label>


                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ Session::get('current_password') }}</strong>
                                    </span>

                            </div>

                            <div class="md-form">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required>
                                <label for="password">{{ __('Password') }}</label>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="md-form">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            </div>

                            <button type="submit" class="btn ad-orangeGradient">
                                Update
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
