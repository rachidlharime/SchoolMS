@extends('struct')

@section('content')

<h1 class="text-center mb-4">New teacher</h1>
<form action={{url('subjects/update/'.$subject->id)}} method="post" class="col-lg-8 col-md-10 m-auto">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" value={{$subject->title}}
         class="form-control" name="title" id="title" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-success form-control">Update</button>
</form>

@endsection