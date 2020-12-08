@extends('struct')

@section('content')

@if($students->total() > 0)
<h1 class="mb-3">Students({{$students->total()}})</h1>
@include('layouts.students')
@else
<h1 class="text-center">No students to show</h1>
@endif
<div class="row">
    <div class="col-md-6">
        {{ $students->links() }}
    </div>
    @if (Auth::user()->isAdmin !== null)
    <div class="col-md-6 text-right">
        <a href={{url('students/new')}} class="text-success">
            <i class="fas fa-plus mr-2"></i>
            Add new student
        </a>
    </div>
    @endif
</div>
@endsection