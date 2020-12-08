@extends('auth.struct')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-5 m-auto">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="first_name">First name</label>
                    <input type="text" name="first_name" id="first_name" required
                            autocomplete="off" value="{{ old('first_name') }}"
                            class="form-control @error('first_name') is-invalid @enderror">
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input type="text" name="last_name" id="last_name" required
                            autocomplete="off" value="{{ old('last_name') }}"
                            class="form-control @error('last_name') is-invalid @enderror">
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required
                            autocomplete="off" value="{{ old('username') }}"
                            class="form-control @error('username') is-invalid @enderror">
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" required
                            autocomplete="off" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required
                            class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm password</label>
                    <input type="password" name="password-confirm" id="password-confirm" required
                            class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
    
@endsection