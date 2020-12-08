@extends('struct')

@section('content')

<h1 class="text-center mb-4">New account</h1>
<form action={{url('students/add/account/'.$id)}}
         method="post" class="col-lg-8 col-md-10 m-auto accountForm">
    @csrf

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" 
            autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" required>
      <span class="text-danger pwdError"></span>
    </div>
    <div class="form-group">
        <label for="conf_password">Confirm password</label>
        <input type="password" class="form-control" name="conf_password" id="conf_password" required>
        <span class="text-danger confError"></span>
    </div>
    <button type="submit" class="btn btn-success form-control">Add</button>
    <a href={{url('/students')}} class="btn btn-primary form-control mt-2">Skip</a>
</form>

@endsection