<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Creation date</th>
        <th>Actions</th>
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
            {{ Carbon\Carbon::parse($subject->created_at)->format('d F Y')  }}
        </td>
        <td>
            <a href={{url('subjects/edit/'.$subject->id)}}>
                <i class="fas fa-edit text-primary m-2"></i>
            </a>
            <a href="#" data-toggle="modal" data-target="#Modal"
                id={{url('subjects/remove/'.$subject->id)}} class="removeBtn">
                <i class="fas fa-trash text-danger m-2"></i>
            </a>
        </td>
    </tr>
    @endforeach
</table>