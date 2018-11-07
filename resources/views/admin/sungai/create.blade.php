@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Buat Data</strong> Barang
            <small>Dibawah ini adalah form untuk menambahkan data barang.</small>
          </h1>
        </div>
      </header><!--/.header -->

        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h4 class="card-title"><strong>Form Barang</strong></h4>
                        <div class="card-body">
                            <div class="col-md-5">
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Ada yang Salah Dengan dengan pengisiian anda<br><br>
                                    <ul>
                                        @foreach($errors->all as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <form action="{{ url('monitor/store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="input-nm-barang">Ketinggian</label>
                                    <input id="input-stok" class="form-control" name="tinggi" type="text" placeholder="cm"/>
                                </div>
                                <div class="form-group">
                                    <label for="input-kat-barang">Kecepatan</label>
                                    <input id="input-stok" class="form-control" name="kecepatan" type="text" placeholder="L/s"/>
                                </div>
                                <div class="form-group">
                                    <label for="input-kat-barang">Kekeruhan</label>
                                    <input id="input-stok" class="form-control" name="kekeruhan" type="text" placeholder="NTU"/>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" value="Tambah" type="submit">
                                </div>
                                </form>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div><!--/.main-content -->
@endsection