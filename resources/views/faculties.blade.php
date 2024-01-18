<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Facuties List</title>
</head>

<body>
    <img src="https://external-preview.redd.it/p9_LBMMn22djOrg9XGS2wIcQh2zRyBELz6zhmSUZUSg.jpg?auto=webp&s=6ae3d505c2f1ff1b15122036003fee77b283615e" width="270px">

    <h1>Faculties List</h1>
    <table class="table">
        <thead>
            <tr style="border-bottom: 1px solid green; border-top: 1px solid green;">
                <th>Name</th>
                <th>Department</th>
                <th>Faculty ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faculties as $f)
            <tr>
                <td>{{$f->last_name}}, {{$f -> first_name}}</td>
                <td>{{$f -> department}}</td>
                <td>{{$f -> faculty_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h1 style="margin-top: 50px;">Faculty Data</h1>

    <h2 style="border-bottom: 1px solid blue; border-top: 1px solid blue;">Departments</h2>
    <table class="table">
        <tr>
            <th>Department</th>
            <th>Total Faculty</th>
        </tr>
        @foreach ($department as $dep)
        <tr>
            <td>{{ $dep->department}}</td>
            <td>{{ $dep-> total_faculty}}</td>
        </tr>
        @endforeach
    </table>

    <h2 style="border-bottom: 1px solid violet; border-top: 1px solid violet;">Promotions</h2>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Academe Points</th>
        </tr>
        @foreach ($promotions as $promotion)
        <tr>
            <td>{{ $promotion->last_name }}, {{ $promotion->first_name }}</td>
            <td>{{ $promotion->academe_points }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>