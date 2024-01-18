<html lang="en">

<head>
    @include("layouts/head")
    <title>New Product</title>
</head>

<body>
    @include("layouts/navbar-admin")
    @include("layouts/errors")
    <h1>New Product</h1>
    <form action="/admin/products" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name: </label>
        <input type="text" name="name"></input><br>
        <label>Price: </label>
        <input type="number" name="price"></input><br>
        <label>Stock: </label>
        <input type="number" name="stock"></input><br>
        <label>Upload photo: </label>
        <input type="file" name="image"></input><br>
        <input type="submit" class="btn btn-success">
    </form>
</body>

</html>