<html lang="en">

<head>
    @include("layouts/head")
    <script src="/js/welcome.js"></script>
    <link rel="stylesheet" href="/css/styles.css"/>
    <title>Home</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Home page</h1>
    <img src="/img/city.jpg" class="img-fluid" alt="manila at night"/>
    <button class="btn btn-primary" onclick="welcome()">Welcome</button>
    <a href="/about">Go to About</a>
</body>

</html>