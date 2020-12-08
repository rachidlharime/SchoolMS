@extends('struct')

@section('content')

@if($students->total() > 0)
<div class="card">
    <div class="card-header">
        <h4>Students({{$students->total()}})</h4>
    </div>
    <div class="card-body">
        @include('layouts.students')
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
    </div>
</div>
@else
<h1 class="text-center">No students to show</h1>
@endif
@endsection