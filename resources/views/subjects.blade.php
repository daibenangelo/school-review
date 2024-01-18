<html lang="en">

<head>
    @include("layouts/head")
    <title>Subjects</title>
</head>

<body>
    @include("layouts/navbar-admin")
    @include("layouts/errors")
    <h1>Subjects</h1>
    <a class="btn btn-success" href="/subjects/create">Add new subject</a>
    @if (count($subjects) > 0)
    <table class="table">
        <tr>
            <th>Subject ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>View subject</th>
            <th>Actions</th>
        </tr>
        @foreach ($subjects as $s)
        <tr>
            <td>{{$s -> subject_id}}</td>
            <td>{{$s -> name}}</td>
            <td>{{$s -> department}}</td>
            <td><a href="/subjects/{{$s -> subject_id}}">More info</a></td>
            <td><a class="btn btn-warning" href="/subjects/{{$s -> subject_id}}/edit">Edit</a>
                <a class="btn btn-danger" data-bs-toggle='modal' data-bs-target='#delete_{{$s -> subject_id}}'>Delete</a>
            </td>
            @include("layouts/modal_delete")
        </tr>
        @endforeach
    </table>
    {{$subjects -> links('pagination::bootstrap-5')}}
    @else
    <p>No subjects found!</p>
    @endif
</body>

</html>