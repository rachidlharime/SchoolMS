<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Full name</th>
        <th>Subject</th>
        <th>Registration date</th>
        <th>Added by</th>
        <th>Account</th>
        <th>Actions</th>
    </tr>
    @foreach ($teachers as $teacher)
    <tr>
        <td>
            {{ $teacher->id }}
        </td>
        <td>
            <img src={{asset('images/teachers/'.$teacher->image)}} 
                    class='rounded-circle mr-2' width=40 alt="image">
            {{ $teacher->first_name.' '.$teacher->last_name }}
        </td>
        <td>
            {{ $teacher->subject->title }}
        </td>
        <td>
            {{ Carbon\Carbon::parse($teacher->created_at)->format('d F Y')  }}
        </td>
        <td>
            {{ $teacher->admin->first_name.' '.$teacher->admin->last_name }}
        </td>
        <td>
            @if (count($teacher->user) == 0)
            <a href={{url('/teachers/account/'.$teacher->id)}}>
                <i class="fas fa-plus m-2 text-primary"></i>
            </a>
            @else
            <i class="fas fa-check m-2 text-success"></i>
            @endif
        </td>
        <td>
            <a href={{url('teachers/edit/'.$teacher->id)}}>
                <i class="fas fa-edit text-primary m-2"></i>
            </a>
            <a href="#" data-toggle="modal" data-target="#Modal"
             id={{url('teachers/remove/'.$teacher->id)}} class="removeBtn">
                <i class="fas fa-trash text-danger m-2"></i>
            </a>
        </td>
    </tr>
    @endforeach
</table>