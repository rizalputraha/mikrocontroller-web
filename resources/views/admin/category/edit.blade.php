@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Buat Data</strong> Kategori
            <small>Dibawah ini adalah form untuk menambahkan data kategori barang.</small>
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
                                <form action="{{ route('category.update',$category->id) }}" method="POST">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="input-nm-kategori">Nama Kategori</label>
                                    <input id="input-nm-kategori" class="form-control" name="name" value="{{ $category->name }}" type="text" placeholder="Nama Kategori"/>
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