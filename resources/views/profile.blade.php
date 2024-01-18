<html lang="en">

<head>
    @include("layouts/head")
    <title>Profile</title>
</head>

<body>
    @include('layouts/navbar')
    @include("layouts/errors")
    <h1>Profile</h1>
    <p>Welcome, {{$s -> first_name}} {{$s -> last_name}}</p>
    <img src="/img/user_profiles/{{$u -> image}}" width="250px" /><br>
    <form action="/profile/{{$u -> user_id}}/upload_photo" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="file" name="image"></input><br>
        <input type="submit" class="btn btn-success" value="Upload photo" />
    </form>
    <a href="/logout">Logout</a>
    <h2>Basic Info</h2>
    <ul>
        <li>Birthdate: {{$s -> birthdate}}</li>
        <li>Gender: {{$s -> gender}}</li>
        <li>Province: {{$s -> province}}</li>
    </ul>
</body>

</html>