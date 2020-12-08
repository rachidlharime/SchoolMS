<div class="row mt-5">
    <div class="col-12">
        <h1>Grades</h1>
    </div>
    <div class="col-12 mt-3">
        <table class="table table-stripped">
            <tr>
                <th>Student</th>
                <th>Grade</th>
                <th>Teacher</th>
                <th>Date of grade</th>
                <th>Actions</th>
            </tr>
            @foreach ($grades as $grade)
            <tr>
                <td>
                    {{ $grade->student->first_name.' '.$grade->student->last_name }}
                </td>
                <td>
                    {{ $grade->grade }}
                </td>
                <td>
                    {{ $grade->teacher->first_name.' '.$grade->teacher->last_name }}
                </td>
                <td>
                    {{ $grade->created_at }}
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
        <a href={{url('/grades')}} class="text-primary">
            <i class="fas fa-arrow-right mr-2"></i>
            Show more
        </a>
    </div>
</div>