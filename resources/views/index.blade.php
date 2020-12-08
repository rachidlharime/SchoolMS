@extends('struct')

@section('content')
    
<div class="row text-center">
    @include('layouts.stats')
</div>

@if (Auth::user()->isAdmin !== null && $teachers->total() > 0)
<div class="row mt-5">
    <div class="col-12">
        <h1>Teachers</h1>
    </div>
    <div class="col-12 mt-3">
        @include('layouts.teachers')
        <a href={{url('/teachers')}} class="text-primary">
            <i class="fas fa-arrow-right mr-2"></i>
            Show more
        </a>
    </div>
</div>
@endif

@if ((Auth::user()->isAdmin !== null || Auth::user()->isTeacher !== null ) && $students->total() > 0)
<div class="row mt-5">
    <div class="col-12">
    <h1>Students</h1>
    </div>
    <div class="col-12 mt-3">
        @include('layouts.students')
        <a href={{url('/students')}} class="text-primary">
            <i class="fas fa-arrow-right mr-2"></i>
            Show more
        </a>
    </div>
</div>
@endif

@if (Auth::user()->isAdmin !== null && $subjects->total() > 0)
<div class="row mt-5">
    <div class="col-12">
    <h1>Subjects</h1>
    </div>
    <div class="col-12 mt-3">
        @include('layouts.subjects')
        <a href={{url('/subjects')}} class="text-primary">
            <i class="fas fa-arrow-right mr-2"></i>
            Show more
        </a>
    </div>
</div>
@endif

@if($grades->total() > 0)
<div class="row mt-5">
    <div class="col-12">
        <h1>Grades</h1>
    </div>
    <div class="col-12 mt-3">
        @include('layouts.grades')
        <a href={{url('/grades')}} class="text-primary">
            <i class="fas fa-arrow-right mr-2"></i>
            Show more
        </a>
    </div>
</div>
@endif

@endsection