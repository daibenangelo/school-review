<html lang="en">

<head>
    @include("layouts/head")
    <title>Edit subject</title>
</head>

<body>
    @include("layouts/navbar-admin")
    @include("layouts/errors")
    <h1>Edit Subject {{$subject -> subject_id}}</h1>
    <form action="/subjects/{{$subject -> subject_id}}" method="POST">
        @csrf
        @method('PUT')
        <label>Name: </label>
        <input type="text" name="subj_name" placeholder="ex. Intro to Programming" value="{{$subject -> name}}" /><br>
        <label>Department: </label>
        <select name="department">
            <option value="Computer" {{$subject -> department == 'Computer' ? 'selected' : ''}}>Computer</option>
            <option value="Mathematics" {{$subject -> department == 'Mathematics' ? 'selected' : ''}}>Mathematics</option>
            <option value="Science" {{$subject -> department == 'Science' ? 'selected' : ''}}>Science</option>
            <option value="Social Science" {{$subject -> department == 'Social Science' ? 'selected' : ''}}>Social Science</option>
            <option value="History" {{$subject -> department == 'History' ? 'selected' : ''}}>History</option>
            <option value="MAPEH" {{$subject -> department == 'MAPEH' ? 'selected' : ''}}>MAPEH</option>
            <option value="Filipino" {{$subject -> department == 'Filipino' ? 'selected' : ''}}>Filipino</option>
            <option value="English" {{$subject -> department == 'English' ? 'selected' : ''}}>English</option>
        </select>
        <input type="submit" />
    </form>
</body>

</html>