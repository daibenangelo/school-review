<html lang="en">

<head>
    @include('layouts/head')
    <title>Show User</title>
</head>

<body>
    @include('layouts/navbar-admin')
    @include('layouts/errors')
    <h1>User Info</h1>
    <img src="/img/user_profiles/{{$user -> image}}" style="width: 250px" />
    <ul>
        <li>User ID: {{$user -> user_id}}</li>
        <li>First name: {{$user -> first_name}}</li>
        <li>Last name: {{$user -> last_name}}</li>
        <li>Email address: {{$user -> email}}</li>
    </ul>
    <h1>Order History</h1>
    <table class="table">
        <tr>
            <th>Status</th>
            <th>Order ID</th>
            <th>Time Placed</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{$o -> status}}</td>
            <td>{{$o -> order_id}}</td>
            <td>{{$o -> time_placed}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>