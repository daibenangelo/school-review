<html lang="en">

<head>
    @include("layouts/head")
    <title>Login</title>
</head>
<body>
    @include('layouts/navbar')
    @include("layouts/errors")
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        <label>Email address: </label>
        <input type="email" name="email"></input><br>
        <label>Password: </label>
        <input type="password" name="password"></input><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>