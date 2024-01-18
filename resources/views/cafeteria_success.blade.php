<html lang="en">

<head>
    @include('layouts/head')
    <title>Order Success</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Order Success!</h1>
    <p>Order ID: {{$order->order_id}}</p>
    <a href="/order">Go to my orders</a>
</body>
</html>