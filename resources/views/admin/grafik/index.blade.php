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
                  <div class="col-lg-12">
                      <div class="card " >
                        <h4 class="card-title">Grafik</h4>  
                        <div class="card-body">
                          <canvas id="canvas"></canvas>
                        </div>
                      </div>
                  </div>

                  <div class="col-lg-12">
                      <div class="card " >
                        <h4 class="card-title">Grafik</h4>  
                        <div class="card-body">
                          <canvas id="kecepatan"></canvas>
                        </div>
                      </div>
                  </div>

                  <div class="col-lg-12">
                      <div class="card " >
                        <h4 class="card-title">Grafik</h4>  
                        <div class="card-body">
                          <canvas id="kekeruhan"></canvas>
                        </div>
                      </div>
                  </div>
                </div>
            </div><!-- row -->
        </div><!--/.main-content -->

@endsection