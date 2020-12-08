<table class="table table-bordered">
    <tr>
        @if (Auth::user()->isAdmin !== null)
        <th>id</th>
        @endif
        <th>Full name</th>
        <th>Date of birth</th>
        <th>Registration date</th>
        @if(Auth::user()->isAdmin !== null)
        <th>Account</th>
        @endif
        <th>Actions</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        @if (Auth::user()->isAdmin !== null)
        <td>
            {{ $student->id }}
        </td>
        @endif
        <td>
            <img src={{asset('images/students/'.$student->image)}} 
                    class='rounded-circle mr-2' width=40 alt="image">
            {{ $student->first_name.' '.$student->last_name }}
        </td>
        <td>
            {{ Carbon\Carbon::parse($student->birthday)->format('d F Y') }}
        </td>
        <td>
            {{ Carbon\Carbon::parse($student->created_at)->format('d F Y') }}
        </td>
        @if(Auth::user()->isAdmin !== null)
        <td>
            @if (count($student->user) == 0)
            <a href={{url('/students/account/'.$student->id)}}>
                <i class="fas fa-plus m-2 text-primary"></i>
            </a>
            @else
            <i class="fas fa-check m-2 text-success"></i>
            @endif
        </td>
        @endif
        <td>
            @if (Auth::user()->isTeacher !== null)
            <a href={{url('grades/new/'.$student->id)}} title="Add a grade">
                <i class="fas fa-plus text-warning m-2"></i>
            </a>
            @else
            <a href={{url('students/edit/'.$student->id)}}>
                <i class="fas fa-edit text-primary m-2"></i>
            </a>
            <a href="#" data-toggle="modal" data-target="#Modal"
             id={{url('students/remove/'.$student->id)}} class="removeBtn">
                <i class="fas fa-trash text-danger m-2"></i>
            </a>
            @endif
        </td>
    </tr>
    @endforeach
</table>