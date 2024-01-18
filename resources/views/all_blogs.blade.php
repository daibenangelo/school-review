<html lang="en">

<head>
    @include("layouts/head")
    <title>Blogs</title>
</head>

<body>
    @include("layouts/errors")
    <h1>Blogs</h1>
    <h2>New blog</h2>
    <form action="/blogs" method="POST">
        @csrf
        <textarea name="content"></textarea>
        <input type="submit" />
    </form>
    @foreach ($blogs as $b)
    <div class="card">
        <div class="card-body">
            <p><b>{{$b -> content}}</b></p>
            <p class="card-text">{{$b -> name}} ({{$b -> time_posted}})</p>
            <a href="/blogs/{{$b -> blog_id}}" class="btn btn-primary">View blog</a>
        </div>
    </div>
    @endforeach
</body>

</html>