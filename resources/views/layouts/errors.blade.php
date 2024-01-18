@foreach ($errors->all() as $error)
    <p class="notif" style="background-color: red; color:white">{{$error}}</p>  
@endforeach
@if (Session::has('success'))
    <p id="notif" style="background-color: green; color:white">{{Session::get('success')}}</p>
@elseif (Session::has('fail'))
    <p id="notif" style="background-color: red; color:white">{{Session::get('fail')}}</p>
@endif