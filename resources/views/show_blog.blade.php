<html lang="en">

<head>
    @include("layouts/head")
    <title>Blog</title>
</head>

<body>
    @include("layouts/errors")
    <h1>Blog</h1>
    <div class="card">
        <div class="card-body">
            <p><b>{{$blog -> content}}</b></p>
            <p class="card-text">{{$blog -> name}} ({{$blog -> time_posted}})</p>
        </div>
    </div>
    <h2>Comments</h2>
    <ul>
        @foreach ($comment as $c)
        <li>{{$c -> content}} ({{$c -> time_posted}})</li>
        @endforeach
    </ul>
</body>

</html>