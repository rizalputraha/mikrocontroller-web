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
                    <div class="row">
                      <div class="col-sm-2">
                        <i class="ti-stats-up fs-50 "></i>
                      </div>
                        <div class="col-sm-5">
                          <div class="flexbox-vertical">
                            <span class="fs-20">Tinggi : 10 cm</span>
                            <span class="fs-20">Debit : 8 L/s</span>
                            <span class="fs-20">Keruh : 16 NTU</span>
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
                            <span class="align-center fs-30">Status: Aman</span>
                          </div>  
                        </div>
                      </div>
                  </div>
                </div>
            </div><!-- row -->
        </div><!--/.main-content -->
@endsection