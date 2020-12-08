@extends('struct')

@section('content')
@if($subjects->total() > 0)
<h1 class="mb-3">Subjects({{$subjects->total()}})</h1>
@include('layouts.subjects')
@else
<h1 class="text-center">No subjects to show</h1>
@endif
<div class="row">
    <div class="col-md-6">
        {{ $subjects->links() }}
    </div>
    @if (Auth::user()->isAdmin !== null)
    <div class="col-md-6 text-right">
        <a href={{url('subjects/new')}} class="text-success">
            <i class="fas fa-plus mr-2"></i>
            Add new subject
        </a>
    </div>
    @endif
</div>
@endsection