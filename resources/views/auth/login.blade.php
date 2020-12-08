@extends('auth.struct')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-header">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
        
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
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required
                                    class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary form-control">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection