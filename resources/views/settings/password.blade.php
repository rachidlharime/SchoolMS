@extends('struct')

@section('content')

<h1 class="text-center mb-4">Change your password</h1>
<form action={{url('/password/update')}} method="post" class="col-lg-8 col-md-10 m-auto">
@csrf

    @if (!$errors->isEmpty())
         <div class="alert alert-danger text-dark"> 
            @foreach ($errors->all() as $error)
            * {{ $error }} <br>
            @endforeach 
        </div>
    @endif

    <div class="form-group">
        <label for="cur_pwd">Current password</label>
        <input type="password" class="form-control" name="cur_pwd" id="cur_pwd" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="new_pwd">New password</label>
        <input type="password" class="form-control" name="new_pwd" id="new_pwd" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="con_new_pwd">Confirm new password</label>
        <input type="password" class="form-control" name="con_new_pwd" id="con_new_pwd" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-success form-control">Update</button>
</form>

@endsection