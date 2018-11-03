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
                                <form action="{{ route('barang.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="input-nm-barang">Stok</label>
                                    <input id="input-stok" class="form-control" name="stok" type="text" placeholder="Stok Barang"/>
                                </div>
                                <div class="form-group">
                                <label for="input-kat-barang">Merk Barang</label>
                                <select name="id_merk" id="input-kat-barang" class="form-control">
                                    @if(!empty($merk))
                                    
                                    @foreach($merk as $m)
                                    <option value="{{$m->id}}">{{$m->nama_merk}}</option>
                                    @endforeach
                                    
                                    @else
                                    <option disabled value="0">Data Tidak Ditemukan</option>
                                    @endif
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="input-kat-barang">Kategori Barang</label>
                                    <select name="id_kategori" id="input-kat-barang" class="form-control">
                                    @if(!empty($merk))
                                    
                                    @foreach($category as $kat)
                                    <option value="{{$kat->id}}">{{$kat->name}}</option>
                                    @endforeach
                                    
                                    @else
                                    <option disabled value="0">Data Tidak Ditemukan</option>
                                    @endif
                                    </select>
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