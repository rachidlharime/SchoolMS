@extends('struct')

@section('content')

<h1 class="text-center mb-4">Edit teacher</h1>
<form action={{url('teachers/update/'.$teacher->id)}} method="post" class="col-lg-8 col-md-10 m-auto" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="first_name">First name</label>
        <input type="text" value={{$teacher->first_name}} 
            class="form-control" name="first_name" id="first_name" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label for="last_name">Last name</label>
        <input type="text" value={{$teacher->last_name}}
            class="form-control" name="last_name" id="last_name" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <select name="subject_id" id="subject" class="form-control" required>
            @foreach ($subjects as $subject)
                <option value={{$subject->id}} 
                    {{ ($subject->id == $teacher->subject_id) ? 'selected' : '' }}>
                    {{ $subject->title }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <img src={{ asset('images/teachers/'.$teacher->image) }} width=80 alt='image' class='d-block m-3'>
        <input type="file" name='image' class="form-control" id="image">
    </div>
    <button type="submit" class="btn btn-success form-control">Update</button>
</form>

@endsection