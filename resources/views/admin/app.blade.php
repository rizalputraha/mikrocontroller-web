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

        <li class="menu-item {{ (Request::is('admin/monitor/detail')) ? 'active' : ''}}">
          <a class="menu-link" href="{{ url('admin/monitor/detail')}}">
            <span class="icon fa ti-search"></span>
            <span class="title">Detail Status</span>
          </a>
        </li>

        <li class="menu-item {{ (Request::is('admin/monitor/grafik/detail')) ? 'active' : ''}}">
          <a class="menu-link" href="{{ url('admin/monitor/grafik/detail')}}">
            <span class="icon fa ti-bar-chart"></span>
            <span class="title">Grafik Status</span>
          </a>
        </li>

        <!-- <li class="menu-item {{ (Request::is('admin/monitor/create')) ? 'active' : ''}}">
          <a class="menu-link" href="{{ url('admin/monitor/create') }}">
            <span class="icon fa fa-thermometer-empty"></span>
            <span class="title">Input Kondisi Sungai</span>
          </a>
        </li> -->

        <li class="menu-item {{ (Request::is('admin/user')) ? 'active' : ''}}">
          <a class="menu-link" href="{{ url('admin/user') }}">
            <span class="icon fa fa-user"></span>
            <span class="title">Tambah User</span>
          </a>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
  <script>
    var url = "{{url('admin/monitor/grafik/tinggi')}}";
    var urlkec = "{{url('admin/monitor/grafik/kecepatan')}}";
    var urlker = "{{url('admin/monitor/grafik/kekeruhan')}}";
    var Years = new Array();
    var Tinggi = new Array();
    var Kecepatan = new Array();
    var Kekeruhan = new Array();
    
    $(document).ready(function(){
      $.get(url, function(response){
        response.forEach(function(data){
            Tinggi.push(data.tinggi);
            Kecepatan.push(data.kecepatan);
            Kekeruhan.push(data.kekeruhan);
            Years.push(data.created_at);
        });
        var ctx = document.getElementById("canvas").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels:Years,
                  datasets: [{
                      label: 'Tinggi',
                      data: Tinggi,
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
          });
      });
    });

    $(document).ready(function(){
      $.get(urlkec, function(response){
        response.forEach(function(data){
            Tinggi.push(data.tinggi);
            Kecepatan.push(data.kecepatan);
            Kekeruhan.push(data.kekeruhan);
            Years.push(data.created_at);
        });
        var ctx = document.getElementById("kecepatan").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels:Years,
                  datasets: [{
                      label: 'Kecepatan',
                      data: Kecepatan,
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
          });
      });
    });

    $(document).ready(function(){
      $.get(urlker, function(response){
        response.forEach(function(data){
            Tinggi.push(data.tinggi);
            Kecepatan.push(data.kecepatan);
            Kekeruhan.push(data.kekeruhan);
            Years.push(data.created_at);
        });
        var ctx = document.getElementById("kekeruhan").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels:Years,
                  datasets: [{
                      label: 'Kekeruhan',
                      data: Kekeruhan,
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
          });
      });
    });
  </script>
</body>

</html>