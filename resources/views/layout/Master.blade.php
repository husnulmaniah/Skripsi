<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Palang Merah Indonesia &mdash; (PMI)</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">Palang Merah Indonesia (PMI)</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title"></div>
              <a href="{{Route('User')}}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Add User
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{Route('Logout')}}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="{{Route('Home')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="{{Route('Data')}}" class="nav-link"><i class="far fa-heart"></i><span>Data Pendonor</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-laptop-medical"></i><span>Pendonor</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="index-0.html" class="nav-link">Mobil Unit (MU)</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Pendonor Pengganti</a></li>
                <li class="nav-item"><a href="{{Route('Pendonor')}}" class="nav-link">Pendonor Sukarela</a></li>
                <li class="nav-item"><a href="{{Route('Aftap')}}" class="nav-link">Petugas Aftap</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-building"></i><span>Ketenagaan</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="{{Route('Petugas')}}" class="nav-link">AFTAP</a></li>
                <li class="nav-item"><a href="{{Route('PetugasHb')}}" class="nav-link">Petugas</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-user-cog"></i><span>Admin</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="{{Route('PekerjaanShow')}}">Pekerjaan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route('Jabatan')}}">Jabatan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route('Tenaga')}}">Jenis Tenaga</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route('Pendidikan')}}">Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route('Tpendidikan')}}">Tingkat Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route('StatusPegawai')}}">Status Kepegawaian</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route('Pesan')}}">Pesan</a></li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{Route('SentPesan')}}" class="nav-link"><i class="far fa-comment-dots"></i><span>Kirim Pemberitahuan</span></a>
            </li>
            <li class="nav-item">
              <a href="{{Route('Statistik')}}" class="nav-link"><i class="fas fa-chart-pie"></i><span>Statistik Darah</span></a>
            </li>
          </ul>
        </div>
      </nav>
      @yield('content')
      
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Palang Merah Indonesia</a>
        </div>
        <div class="footer-right">
          @Uzn
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  @yield('footer')
</body>
</html>
