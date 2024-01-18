<html lang="en">

<head>
    @include("layouts/head")
    <title>Subject Show</title>
</head>

<body>
    @include("layouts/navbar-admin")
    @include("layouts/errors")
    <h1>Subjects Show</h1>
    <ul>
        <li>Subject ID: {{$subject->subject_id}}</li>
        <li>Name: {{$subject->name}}</li>
        <li>Department: {{$subject->department}}</li>
    </ul>
    <h2>Classes</h2>
    <table class="table">
        <tr>
            <th>Class ID</th>
            <th>Room</th>
            <th>Schedule</th>
        </tr>
        @foreach ($classes as $c)
        <tr>
            <td>{{$c -> class_id}}</td>
            <td>{{$c -> room}}</td>
            <td>{{$c -> schedule}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>