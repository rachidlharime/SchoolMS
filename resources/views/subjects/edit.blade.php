@extends('struct')

@section('content')

<div class="col-lg-8 col-md-10 m-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Edit subject</h3>
        </div>
        <div class="card-body">
            <form action={{url('subjects/update/'.$subject->id)}} method="post" >
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" value={{$subject->title}}
                     class="form-control" name="title" id="title" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-success form-control">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection