<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BEAR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      @if (Session::has('user_id'))
      <li class="nav-item">
        <a class="nav-link" href="/profile">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/order">Orders</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="/cafeteria">Cafeteria</a>
      </li>
      @if (Session::has('user_id'))
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      @endif
    </div>
  </div>
</nav>