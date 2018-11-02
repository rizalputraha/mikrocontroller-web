@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">  
        <div class="header-info"> 
          <img class="img-fluid float-left" src="{{asset('admin/img/logo.jpg')}}" alt="Logo">
          <h1 class="header-title" style="padding:30px;"><strong>PT. INTI SOLUSINDO ABADI</strong></h1>
        </div>
      </header><!--/.header -->

        <div class="main-content">
            <div class="row">
                <div class="col-6 col-lg-6">
                  <div class="card card-body bg-danger" >
                        <div class="flexbox">
                          <span class="ti-bag fs-40"></span>
                          <span class="fs-40">{{ $jml_barang }}</span>
                        </div>
                        <div class="text-right">Produk</div>
                  </div>
                </div>
                </div>
            </div>
        </div><!--/.main-content -->
@endsection