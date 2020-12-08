@extends('struct')

@section('content')
@if($subjects->total() > 0)
<div class="card">
    <div class="card-header">
        <h4>Subjects({{$subjects->total()}})</h4>
    </div>
    <div class="card-body">
        @include('layouts.subjects')
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
    </div>
</div>
@else
<h1 class="text-center">No subjects to show</h1>
@endif
@endsection