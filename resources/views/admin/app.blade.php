<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <!-- Laravel Default <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="{{ asset('admin/css/core.min.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/css/app.min.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/css/style.min.css')}}" rel="stylesheet">
  <!-- Favicon -->
  <link rel="apple-touch-icon" href="{{ asset('admin/img/apple-touch-icon.png') }}">
  <link rel="icon" href="{{ asset('admin/img/favicon.png') }}">
  <style>
    table.dataTable.nowrap th,
    table.dataTable.nowrap td {
      white-space: normal;
    }

    .child-menu {
      list-style-type: none;
    }
  </style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="spinner-dots">
      <span class="dot1"></span>
      <span class="dot2"></span>
      <span class="dot3"></span>
    </div>
  </div>


  <!-- Sidebar -->
  <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
    <header class="sidebar-header">
      <a class="logo-icon" href="../index.html">
        <img src="{{asset('admin/img/logo-icon-light.png')}}" alt="logo icon">
      </a>
      <span class="logo">
        <a href="../index.html">
          <img src="{{asset('admin/img/logo-light.png')}}" alt="logo">
        </a>
      </span>
      <span class="sidebar-toggle-fold"></span>
    </header>

    <nav class="sidebar-navigation">
      <ul class="menu">

        <li class="menu-category">Navigation</li>

        <li class="menu-item {{ (Request::is('admin/dashboard')) ? 'active' : ''}}">
          <a class="menu-link" href="{{ url('admin/dashboard')}}">
            <span class="icon fa fa-home"></span>
            <span class="title">Dashboard</span>
          </a>
        </li>

        <li class="menu-category">Barang</li>

        <li class="menu-item @if(Request::is('admin/merk') || Request::is('admin/category')) 
                                    {{'active open'}}
                                 @else
                                    {{''}}
                                 @endif">
          <a class="menu-link" href="#">
            <span class="icon fa fa-cube"></span>
            <span class="title">Barang</span>
            <span class="arrow"></span>
          </a>
          <ul class="menu-submenu">
            <li class="menu-item {{ (Request::is('admin/barang')) ? 'active' : ''}}">
              <a class="menu-link" href="{{url('admin/barang')}}">
                <span class="dot"></span>
                <span class="title">Data Semua Barang</span>
              </a>
              <ul class="child-menu">
                <li>
                  <a href="{{url('admin/barang-masuk')}}">Barang Masuk</a>
                </li>
                <li>
                  <a href="{{url('admin/barang-keluar')}}">Barang Keluar</a>
                </li>
              </ul>
            </li>
            <li class="menu-item {{ (Request::is('admin/merk')) ? 'active' : ''}}">
              <a class="menu-link" href="{{url('admin/merk')}}">
                <span class="dot"></span>
                <span class="title">Data merk</span>
              </a>
            </li>
            <li class="menu-item {{ (Request::is('admin/category')) ? 'active' : ''}}">
              <a class="menu-link" href="{{url('admin/category')}}">
                <span class="dot"></span>
                <span class="title">Data Kategori Barang</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-item">
          <a class="menu-link" href="#">
            <span class="icon fa fa-print"></span>
            <span class="title">Laporan</span>
            <span class="arrow"></span>
          </a>
          <ul class="menu-submenu">
            <li class="menu-item {{ (Request::is('admin/laporan/barang')) ? 'active' : ''}}">
              <a class="menu-link" href="{{url('admin/laporan/barang')}}">
                <span class="dot"></span>
                <span class="title">Barang</span>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
  </aside>
  <!-- END Sidebar -->


  <!-- Topbar -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-btn sidebar-toggler">
        <i>&#9776;</i>
      </span>
    </div>
    <div class="topbar-right">
      <ul class="topbar-btns">
        <li class="dropdown">
            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="width:100%;">
              <button class="dropdown-item" type="submit" style="width:100%;">
                <i class="ti-power-off"></i>Logout</button>
              {{ csrf_field() }}
            </form>
        </li>
        <div class="topbar-divider"></div>
      </ul>
    </div>
  </header>
  <!-- END Topbar -->


  @yield('content')

  <!-- Footer -->
  <footer class="site-footer">
    <div class="row">
      <div class="col-md-6">
        <p class="text-center text-md-left">Copyright © 2017
          <a href="http://thetheme.io/theadmin">TheAdmin</a>. All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- END Footer -->

  </main>
  <!-- END Main container -->



  <!-- Global quickview -->
  <div id="qv-global" class="quickview" data-url="../assets/data/quickview-global.html">
    <div class="spinner-linear">
      <div class="line"></div>
    </div>
  </div>
  <!-- END Global quickview -->

  <!-- Scripts -->
  <!-- Laravel Default View <script src="{{ asset('js/app.js') }}"></script> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $('#bla').DataTable();
  </script>
  <script src="{{ asset('admin/js/core.min.js')}}"></script>
  <script src="{{ asset('admin/js/app.min.js')}}"></script>
  <script src="{{ asset('admin/js/script.min.js')}}"></script>

</body>

</html>