@extends('struct')

@section('content')

<h1 class="text-center mb-4">Change your username</h1>
<form action={{url('/username/update')}} method="post" class="col-lg-8 col-md-10 m-auto">
    @csrf

    @if (!$errors->isEmpty())
         <div class="alert alert-danger text-dark"> 
            @foreach ($errors->all() as $error)
            * {{ $error }} <br>
            @endforeach 
        </div>
    @endif
   
    
    <div class="form-group">
        <label for="username">New username</label>
        <input type="text" class="form-control" name="username" id="username"
            autocomplete="off" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>
    <div class="form-group">
        <label for="con_password">Confirm password</label>
        <input type="password" class="form-control" name="con_password" 
            id="con_password" autocomplete="off" required>
    </div>
    <button type="submit" class="btn btn-success form-control">Update</button>
</form>

@endsection