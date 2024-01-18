<html lang="en">

<head>
    @include("layouts/head");
    <title>Create Subject</title>
</head>

<body>
    @include("layouts/navbar-admin")
    @include("layouts/errors")
    <h1>Create Subject</h1>
    <form action="/subjects" method="POST">
        @csrf
        <label>Name: </label>
        <input type="text" name="subj_name" placeholder="ex. Intro to Programming" /><br>
        <label>Department: </label>
        <select name="department">
            <option value="Computer">Computer</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Science">Science</option>
            <option value="Social Science">Social Science</option>
            <option value="History">History</option>
            <option value="MAPEH">MAPEH</option>
            <option value="Filipino">Filipino</option>
            <option value="English">English</option>
        </select>
        <input type="submit" />
    </form>
</body>

</html>