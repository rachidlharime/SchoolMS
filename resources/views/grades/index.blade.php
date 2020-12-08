@extends('struct')

@section('content')
@if($grades->total() > 0)
<div class="card">
    <div class="card-header">
        <h4>Grades({{$grades->total()}})</h4>
    </div>
    <div class="card-body">
        @include('layouts.grades')
        <div class="row">
            <div class="col-md-6">
                {{ $grades->links() }}
            </div>
            @if (Auth::user()->isAdmin !== null)
            <div class="col-md-6 text-right">
                <a href={{url('grades/new')}} class="text-success">
                    <i class="fas fa-plus mr-2"></i>
                    Add new grade
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
@else
<h1 class="text-center">No grades to show</h1>
@endif
@endsection