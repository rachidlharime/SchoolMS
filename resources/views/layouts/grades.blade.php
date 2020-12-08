<table class="table table-bordered">
    <tr>
        @if (Auth::user()->isStudent === null)
        <th>Student</th>
        @endif
        @if (Auth::user()->isTeacher === null)
        <th>Subject</th>
        @endif
        <th>Grade</th>
        @if (Auth::user()->isTeacher === null)
        <th>Teacher</th>
        @endif
        <th>Creation date</th>
        @if (Auth::user()->isTeacher !== null)
        <th>Actions</th>
        @endif
    </tr>
    @foreach ($grades as $grade)
    <tr>
        @if (Auth::user()->isStudent === null)
        <td>
            {{ $grade->student->first_name.' '.$grade->student->last_name }}
        </td>
        @endif
        @if (Auth::user()->isTeacher === null)
        <td>
            {{ $grade->subject->title }}
        </td>
        @endif
        <td>
            {{ $grade->grade }}
        </td>
        @if (Auth::user()->isTeacher === null)
        <td>
            {{ $grade->teacher->first_name.' '.$grade->teacher->last_name }}
        </td>
        @endif
        <td>
            {{ Carbon\Carbon::parse($grade->created_at)->format('d F Y')  }}
        </td>
        @if (Auth::user()->isTeacher !== null)
        <td>
            <a href={{url('grades/edit/'.$grade->id)}}>
                <i class="fas fa-edit text-primary m-2"></i>
            </a>
            <a href="#" data-toggle="modal" data-target="#Modal"
             id={{url('grades/remove/'.$grade->id)}} class="removeBtn">
                <i class="fas fa-trash text-danger m-2"></i>
            </a>
        </td>
        @endif
    </tr>
    @endforeach
</table>