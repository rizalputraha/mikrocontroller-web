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
                                <form action="{{ route('barang.update',$barang->id) }}" method="POST">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="input-stok-barang">Stok Barang</label>
                                    <input id="input-stok-barang" class="form-control" name="stok" value="{{ $barang->stok }}" type="text" placeholder="Stok Barang"/>
                                </div>
                                  <div class="form-group">
                                    <label for="input-kat-barang">Merk Barang</label>
                                    <select name="id_merk" id="input-kat-barang" class="form-control">
                                        @foreach($merk as $m)
                                        <option value="{{$m->id}}">{{$m->nama_merk}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="input-kat-barang">Kategori Barang</label>
                                    <select name="id_kategori" id="input-kat-barang" class="form-control">
                                        @foreach($category as $kat)
                                        <option value="{{$kat->id}}">{{$kat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" value="Update" type="submit">
                                </div>
                                </form>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div><!--/.main-content -->
@endsection