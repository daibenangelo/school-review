<html lang="en">

<head>
    @include("layouts/head")
    <title>Contact Us</title>
</head>

<body>
    @include("layouts/navbar")
    @include("layouts/errors")
    <p>We would like to hear from you!</p>
    <form action="/contact" method="POST">
        @csrf
        <label>Email address: </label>
        <input type="email" name="email"></input><br>
        <label>Name: </label>
        <input type="text" name="name"></input><br>
        <label>Content: </label><br>
        <textarea name="text"></textarea><br>
        <input type="submit" class="btn btn-primary">
    </form>

</body>

</html>