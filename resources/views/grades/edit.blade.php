@extends('struct')

@section('content')
    
<div class="col-lg-8 col-md-10 m-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Edit grade</h3>
        </div>
        <div class="card-body">
            <form action={{url('grades/update/'.$grade->id)}} method="post" >
                @csrf

                <div class="form-group">
                    <label for="student">Student</label>
                    <select class="form-control" name="student_id" id="student" required readonly>
                            <option value={{$grade->student_id}} selected>
                                {{ $grade->student->first_name.' '.$grade->student->last_name }}
                            </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="grade">Grade</label>
                    <input type="number" min="0" max="20" value={{$grade->grade}}
                        class="form-control" name="grade" id="grade" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-success form-control">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection