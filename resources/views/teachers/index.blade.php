@extends('struct')

@section('content')

@if($teachers->total() > 0)
<h1 class="mb-3">Teachers({{$teachers->total()}})</h1>
{{-- <form action={{ url('/teachers') }} method="get" id="filterForm">
   
    <label for="subject_id">Subject</label>
    <select name="subject_id" id="subject_id" class="form-control" onchange="form.submit()">
        <option value="">all</option>
        @foreach ($subjects as $subject)
            <option value={{$subject->id}}>
                {{ $subject->title }}
            </option>
        @endforeach
    </select>
</form> --}}
@include('layouts.teachers')
@else
<h1 class="text-center">No teachers to show</h1>
@endif
<div class="row">
    <div class="col-md-6">
        {{ $teachers->links() }}
    </div>
    @if (Auth::user()->isAdmin !== null)
    <div class="col-md-6 text-right">
        <a href={{url('teachers/new')}} class="text-success">
            <i class="fas fa-plus mr-2"></i>
            Add new teacher
        </a>
    </div>
    @endif
</div>

@endsection