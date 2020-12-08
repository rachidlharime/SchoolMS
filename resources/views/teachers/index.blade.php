@extends('struct')

@section('content')

@if($teachers->total() > 0)
<div class="card">
    <div class="card-header">
        <h4>Teachers({{$teachers->total()}})</h4>
    </div>
    <div class="card-body">
        @include('layouts.teachers')
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
    </div>
</div>
@else
<h1 class="text-center">No teachers to show</h1>
@endif


@endsection