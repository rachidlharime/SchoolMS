@extends('struct')

@section('content')

<div class="col-lg-8 col-md-10 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Edit student</h4>
        </div>
        <div class="card-body">
            <form action={{url('students/update/'.$student->id)}} method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col">
                        <label for="first_name">First name</label>
                        <input type="text" value={{$student->first_name}} 
                            class="form-control" name="first_name" id="first_name" autocomplete="off" required>
                    </div>
                    <div class="form-group col">
                        <label for="last_name">Last name</label>
                        <input type="text" value={{$student->last_name}}
                            class="form-control" name="last_name" id="last_name" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthday">Date of birth</label>
                    <input type="date" value={{ $student->birthday }}
                    class="form-control" name="birthday" id="birthday" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <img src={{ asset('images/students/'.$student->image) }} width=80 alt='image' class='d-block m-3'>
                    <input type="file" name='image' class="form-control" id="image">
                </div>
                <button type="submit" class="btn btn-success form-control">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection