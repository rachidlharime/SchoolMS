<div class="row text-center">
    <div class="col-lg-4 col-md-7 m-auto p-3">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <i class="fas fa-user-tie fa-5x"></i>
                <h1 class="card-title mt-3">
                    {{ $countT }}
                </h1>
                <h4 class="text-uppercase">teacher</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-7 m-auto p-3">
        <div class="card text-white bg-success">
            <div class="card-body">
                <i class="fas fa-user-graduate fa-5x"></i>
                <h1 class="card-title mt-3">
                    {{ $countSt }}
                </h1>
                <h4 class="text-uppercase">student</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-7 m-auto p-3">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <i class="fas fa-book fa-5x"></i>
                <h1 class="card-title mt-3">
                    {{ $countS }}
                </h1>
                <h4 class="text-uppercase">subject</h4>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-12">
        <h1>Teachers</h1>
    </div>
    <div class="col-12 mt-3">
        <table class="table table-stripped">
            <tr>
                <th>id</th>
                <th>Full name</th>
                <th>Subject</th>
                <th>Added by</th>
                <th>Actions</tr>
            </tr>
            @foreach ($teachers as $teacher)
            <tr>
                <td>
                    {{ $teacher->id }}
                </td>
                <td>
                    {{ $teacher->first_name.' '.$teacher->last_name }}
                </td>
                <td>
                    {{ $teacher->subject->title }}
                </td>
                <td>
                    {{ $teacher->admin->first_name.' '.$teacher->admin->last_name }}
                </td>
                <td>
                    <a href="http://">
                        <i class="fas fa-edit text-primary m-2"></i>
                    </a>
                    <a href="http://">
                        <i class="fas fa-trash text-danger m-2"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        <a href={{url('/teachers')}} class="text-primary">
            <i class="fas fa-arrow-right mr-2"></i>
            Show more
        </a>
    </div>
</div>
<div class="row mt-5">
    <div class="col-12">
    <h1>Students</h1>
    </div>
    <div class="col-12 mt-3">
        <table class="table table-stripped">
            <tr>
                <th>id</th>
                <th>Full name</th>
                <th>Date of birth</th>
                <th>Actions</tr>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>
                    {{ $student->id }}
                </td>
                <td>
                    {{ $student->first_name.' '.$student->last_name }}
                </td>
                <td>
                    {{ date('d-m-Y', strtotime($student->birthday)) }}
                </td>
                <td>
                    <a href="http://" title="Add a grade">
                        <i class="fas fa-plus text-success m-2"></i>
                    </a>
                    <a href="http://" title="Edit">
                        <i class="fas fa-edit text-primary m-2"></i>
                    </a>
                    <a href="http://" title="Remove">
                        <i class="fas fa-trash text-danger m-2"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        <a href={{url('/students')}} class="text-primary">
            <i class="fas fa-arrow-right mr-2"></i>
            Show more
        </a>
    </div>
</div>
<div class="row mt-5">
    <div class="col-12">
    <h1>Subjects</h1>
    </div>
    <div class="col-12 mt-3">
        <table class="table table-stripped">
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Actions</tr>
            </tr>
            @foreach ($subjects as $subject)
            <tr>
                <td>
                    {{ $subject->id }}
                </td>
                <td>
                    {{ $subject->title }}
                </td>
                <td>
                    <a href="http://">
                        <i class="fas fa-edit text-primary m-2"></i>
                    </a>
                    <a href="http://">
                        <i class="fas fa-trash text-danger m-2"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        <a href={{url('/subjects')}} class="text-primary">
            <i class="fas fa-arrow-right mr-2"></i>
            Show more
        </a>
    </div>
</div>