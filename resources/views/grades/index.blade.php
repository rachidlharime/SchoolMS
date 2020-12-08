@extends('struct')

@section('content')
@if($grades->total() > 0)
<h1 class="mb-3">Grades({{$grades->total()}})</h1>
@include('layouts.grades')
@else
<h1 class="text-center">No grades to show</h1>
@endif
<div class="row">
    <div class="col-md-6">
        {{ $grades->links() }}
    </div>
    @if (Auth::user()->isTeacher !== null)
    <div class="col-md-6 text-right">
        <a href={{url('grades/new')}} class="text-success">
            <i class="fas fa-plus mr-2"></i>
            Add new grade
        </a>
    </div>
    @endif
</div>
@endsection