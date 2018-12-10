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
                                <form action="{{ url('admin/user/store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="input-nm-barang">Nama</label>
                                    <input id="name" class="form-control" name="name" type="text" placeholder="Nama"/>
                                </div>
                                <div class="form-group">
                                    <label for="input-kat-barang">Username</label>
                                    <input id="username" class="form-control" name="username" type="text" placeholder="Username"/>
                                </div>
                                <div class="form-group">
                                    <label for="input-kat-barang">No Telp</label>
                                    <input id="telp" class="form-control" name="telp" type="text" placeholder="No Telp"/>
                                </div>
                                <div class="form-group">
                                    <label for="input-kat-barang">Password</label>
                                    <input id="password" class="form-control" name="password" type="text" placeholder="Password"/>
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