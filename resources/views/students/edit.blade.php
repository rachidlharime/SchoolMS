@extends('struct')

@section('content')

<h1 class="text-center mb-4">Edit student</h1>
<form action={{url('students/update/'.$student->id)}} method="post" class="col-lg-8 col-md-10 m-auto" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="first_name">First name</label>
        <input type="text" value={{ $student->first_name }}
         class="form-control" name="first_name" id="first_name" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="last_name">Last name</label>
        <input type="text" value={{ $student->last_name }}
        class="form-control" name="last_name" id="last_name" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="birthday">Date of birth</label>
        <input type="date" value={{ $student->birthday }}
        class="form-control" name="birthday" id="birthday" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <img src={{ asset('images/students/'.$student->image) }} width=80 alt='image' class='d-block m-3'>
        <input type="file" name='image' class="form-control" id="image">
    </div>
    <button type="submit" class="btn btn-success form-control">Update</button>
</form>

@endsection