@extends('struct')

@section('content')

<h1 class="text-center mb-4">New grade</h1>
<form action={{url('grades/add')}} method="post" class="col-lg-8 col-md-10 m-auto">
    @csrf

    <div class="form-group">
        <label for="student">Student</label>
        <select class="form-control" name="student_id" id="student" required 
          {{ ($id !== null ) ? 'readonly' : '' }}>
            <option value="">--Select--</option>
            @foreach ($students as $student)
                <option value={{$student->id}} {{ ($student->id == $id ) ? 'selected' : '' }}>
                    {{ $student->first_name.' '.$student->last_name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="grade">Grade</label>
        <input type="number" min="0" max="20" value="10"
            class="form-control" name="grade" id="grade" autocomplete="off">
    </div>
    <input type="hidden" name="subject_id" value={{Auth::user()->teacher->subject_id}}>
    <input type="hidden" name="teacher_id" value={{Auth::user()->isTeacher}}>
    <button type="submit" class="btn btn-success form-control">Add</button>
</form>

@endsection