@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">  
        <div class="header-info"> 
          <h1 class="header-title"><strong>Monitor Sungai</strong></h1>
        </div>
      </header><!--/.header -->

        <div class="main-content">
            <div class="row">
                
                <div class="col-6 col-lg-6">
                  <div class="card card-body bg-danger" >
                    <h2 class="card-inverse" style="background-color:#f96868">Kondisi Sungai</h2>
                    <div class="row">
                      <div class="col-sm-2">
                        <i class="ti-stats-up fs-50 "></i>
                      </div>
                        <div class="col-sm-5">
                          <div class="flexbox-vertical">
                            <span class="fs-20">Tinggi : {{$mon->tinggi}} cm</span>
                            <span class="fs-20">Debit : {{$mon->kecepatan}} L/s</span>
                            <span class="fs-20">Keruh : {{$mon->kekeruhan}} NTU</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-6 col-lg-6">
                      <div class="card card-body bg-success" >
                        <div class="row">
                          <div class="col-sm-2">
                            <i class="ti-pulse fs-50 "></i>
                          </div>
                          <div class="col-sm-5">
                            @if($mon->tinggi < 10)
                            <span class="align-center fs-30">Status: Aman</span>
                            @elseif($mon->tinggi > 10)
                            <span class="align-center fs-30">Status: Waspada</span>
                            @elseif($mon->tinggi > 15)
                            <span class="align-center fs-30">Status: Bahaya</span>
                            @endif
                          </div>  
                        </div>
                      </div>
                  </div>

                  <div class="col-lg-12">
                      <div class="card " >
                        <h4 class="card-title">Grafik Monitor</h4>  
                        <div class="card-body">
                          <canvas id="canvas"></canvas>
                        </div>
                      </div>
                  </div>

                </div>
            </div><!-- row -->
        </div><!--/.main-content -->
@endsection