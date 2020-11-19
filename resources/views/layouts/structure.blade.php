<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="{{url('/')}}">Simple App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      @if(!Auth::guard('admin')->check())
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Add User</a>
      </li>
      @endif
      @if(!Auth::guard('admin')->check())
      <li class="nav-item">
        <a class="nav-link" href="{{url('/login')}}">Login</a>
      </li>
      @endif
      @if(Auth::guard('admin')->check())
      <li class="nav-item">
        <a class="nav-link" href="{{url('/logout')}}">Logout</a>
      </li>
      @endif
    </ul>
  </div>
</nav>
	<div class="container-fluid">
		@yield('content')
	</div>
</body>
<script>
    $( document ).ready(function() {
        setTimeout(function() { $("#msg").hide(); }, 3000);
    });
</script>
</html>