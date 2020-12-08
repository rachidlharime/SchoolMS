@extends('struct')

@section('content')

<div class="col-lg-8 col-md-10 m-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">New teacher</h3>
        </div>
        <div class="card-body">
            <form action={{url('teachers/add')}} method="post" 
                    enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col">
                        <label for="first_name">First name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" 
                            autocomplete="off" required>
                    </div>
                    <div class="form-group col">
                        <label for="last_name">Last name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" 
                            autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select name="subject_id" id="subject" class="form-control" required>
                        <option value="">--Select--</option>
                        @foreach ($subjects as $subject)
                            <option value={{$subject->id}}>
                                {{ $subject->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name='image'>
                </div>
                <input type="hidden" name="added_by" value={{Auth::user()->isAdmin}}>
                <button type="submit" class="btn btn-success form-control">Add</button>
            </form>
        </div>
    </div>
</div>


@endsection