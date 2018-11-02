@extends('admin.app') @section('content')
<!-- Main container -->
<main>
  <header class="header bg-ui-general">
    <div class="header-info">
      <h1 class="header-title">
        <strong>Tabel</strong> Transaksi
        <small>Berikut adalah Tabel Transaksi Keluar.</small>
      </h1>
    </div>
  </header>
  <!--/.header -->

  <div class="main-content">
    <div class="row">

      <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Toolbar
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
      <div class="col-md-12">
        <div class="card">
          <h4 class="card-title">
            <strong>Tabel Barang Keluar</strong>
          </h4>
          <div class="card-body">
            <div class="flexbox-mb-20">
              <div class="btn-toolbar" style="padding-bottom:20px;">
                <div class="btn-group btn-group-sm">
                  <a class="btn btn-info" href="{{route('create-keluar')}}">
                    <i class="fa fa-plus"></i> Barang Keluar</a>
                </div>
              </div>
            </div>
            <table id="bla" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Merk Barang</th>
                  <th>Jumlah Barang</th>
                  <th>Kategori</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tbody>
                @foreach($barang as $key => $b)
                <tr>
                  <th>{{ ++$key }}</th>
                  <td>{{ $b->merk->nama_merk}}</td>
                  <td>{{ $b->stok}}</td>
                  <td>{{ $b->category->name }}</td>
                  <td>{{ $b->updated_at }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.main-content -->
  @endsection