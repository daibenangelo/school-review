<html lang="en">

<head>
    @include("layouts/head")
    <title>Register</title>
</head>

<body>
    @include("layouts/navbar-admin")
    @include("layouts/errors")
    <h1>Register</h1>
    <form action="/admin/register" method="POST">
        @csrf
        <label>First name: </label>
        <input type="text" name="first_name"></input><br>
        <label>Last name: </label>
        <input type="text" name="last_name"></input><br>
        <label>Birthdate: </label>
        <input type="date" name="birthdate"></input><br>
        <label>Gender: </label>
        <input type="radio" name="gender" value="Male">
        <label>Male</label>
        <input type="radio" name="gender" value="Female">
        <label>Female</label>
        <input type="radio" name="gender" value="Other">
        <label>Other</label><br>
        <label>Mobile number: </label>
        <input type="number" name="mobile_number"></input><br>
        <label>Email address: </label>
        <input type="email" name="email"></input><br>
        <label>Date enrolled: </label>
        <input type="date" name="date_enrolled"></input><br>
        <label>Province: </label>
        <select name="province">
            <option value="La Union">La Union</option>
            <option value="Metro Manila">Manila</option>
            <option value="Benguet">Benguet</option>
        </select><br>
        <input type="submit">
    </form>
    <a href="/admin/register/newadmin">Add new admin account</a>
</body>

</html>