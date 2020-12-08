@extends('struct')

@section('content')

<h1 class="text-center mb-4">New subject</h1>
<form action={{url('subjects/add')}} method="post" class="col-lg-8 col-md-10 m-auto">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" autocomplete="off" required>
    </div>
    <input type="hidden" name="added_by" value={{Auth::user()->isAdmin}}>
    <button type="submit" class="btn btn-success form-control">Add</button>
</form>

@endsection