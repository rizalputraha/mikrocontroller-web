@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Tabel</strong> Kategori Barang
            <small>Berikut adalah Tabel Kategori Barang.</small>
          </h1>
        </div>
      </header><!--/.header -->

      <div class="main-content">
        <div class="row">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Toolbar
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <div class="col-md-12">
            <div class="card">
              <h4 class="card-title"><strong>Tabel Kategori Barang</strong></h4>
              <div class="card-body">
                <div class="flexbox-mb-20">
                  <div class="btn-toolbar" style="padding-bottom:20px;">
                    <div class="btn-group btn-group-sm">
                      <a class="btn btn-info" href="{{route('category.create')}}"><i class="fa fa-plus"></i> Add New Data</a>
                    </div>
                  </div>
                </div>
                <table id="bla" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($category as $key => $kat)
                    <tr>
                      <th>{{ ++$key }}</th>
                      <td>{{ $kat->name }}</td>
                      <td>
                        <a class="btn btn-success" href="{{ route('category.edit',$kat->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                        <form style="display:inline;" action="{{ route('category.destroy',$kat->id) }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('DELETE')}}
                          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div><!--/.main-content -->
@endsection