<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'E-Commerce')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">E-Commerce</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        @if(session()->has('user'))
          <li class="nav-item"><a class="nav-link" href="#">Hi, {{ session('user') }}</a></li>
          @if(session('role') == 'admin')
            <li class="nav-item"><a class="nav-link" href="/admin">Admin</a></li>
          @endif
          <li class="nav-item"><a class="nav-link" href="/cart">Cart</a></li>
          <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
        @else
          <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @yield('content')
</div>
</body>
</html>
