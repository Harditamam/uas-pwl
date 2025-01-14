<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
</head>
<body class="text-center">
    <div class="fullscreen-bg">
        <video loop muted autoplay class="fullscreen-bg__video">
            <source src="bg.mp4" type="video/mp4">
        </video>
    </div>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<header class="masthead mb-auto">
  <div class="inner">
    <h3 class="masthead-brand">
        <a class="navbar-brand" href="#">
            <img src="img/unram.png" width="50" height="50" class="d-inline-block align-top" alt="">
          </a>
    </h3>
    <nav class="nav nav-masthead justify-content-center">
      <a class="nav-link active" href="#">Beranda</a>
      <a class="nav-link" href="/login">Login</a>
    </nav>
  </div>
</header>

<main role="main" class="inner cover">
  <h1 class="cover-heading">SMA Negeri 1 Tanjung</h1>
  <p class="lead">Sistem Penginputan Nilai Siswa</p>
  <p class="lead">
  </p>
</main>

<footer class="mastfoot mt-auto">
  <div class="inner">
    <p>&copy; Tanjung, Lombok Utara</a>
  </div>
</footer>
</div>
</body>
</html>
