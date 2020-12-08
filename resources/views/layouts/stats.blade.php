@if (Auth::user()->isAdmin !== null)
<div class="col-lg-6 col-md-8 m-auto p-3">
    <div class="card text-white bg-primary">
        <div class="card-body">
            <i class="fas fa-user-tie fa-5x"></i>
            <h1 class="card-title mt-3">
                {{ $teachers->total() }}
            </h1>
            <h4 class="text-uppercase">teacher</h4>
        </div>
    </div>
</div>
@endif

@if (Auth::user()->isAdmin !== null || Auth::user()->isTeacher !== null)
<div class="col-lg-6 col-md-8 m-auto p-3">
    <div class="card text-white bg-success">
        <div class="card-body">
            <i class="fas fa-user-graduate fa-5x"></i>
            <h1 class="card-title mt-3">
                {{ $students->total() }}
            </h1>
            <h4 class="text-uppercase">student</h4>
        </div>
    </div>
</div>
@endif

@if (Auth::user()->isAdmin !== null)
<div class="col-lg-6 col-md-8 m-auto p-3">
    <div class="card text-white bg-warning">
        <div class="card-body">
            <i class="fas fa-book fa-5x"></i>
            <h1 class="card-title mt-3">
                {{ $subjects->total() }}
            </h1>
            <h4 class="text-uppercase">subject</h4>
        </div>
    </div>
</div>
@endif

<div class="col-lg-6 col-md-8 m-auto p-3">
    <div class="card text-white bg-info">
        <div class="card-body">
            <i class="fas fa-graduation-cap fa-5x"></i>
            <h1 class="card-title mt-3">
                {{ $grades->total() }}
            </h1>
            <h4 class="text-uppercase">grade</h4>
        </div>
    </div>
</div>