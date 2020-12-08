@extends('struct')

@section('content')

<div class="col-lg-8 col-md-10 m-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">New subject</h3>
        </div>
        <div class="card-body">
            <form action={{url('subjects/add')}} method="post" >
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" autocomplete="off" required>
                </div>
                <input type="hidden" name="added_by" value={{Auth::user()->isAdmin}}>
                <button type="submit" class="btn btn-success form-control">Add</button>
            </form>
        </div>
    </div>
</div>

@endsection