@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Tabel</strong> User
            <small>Berikut merupakan Tabel dari User.</small>
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
              <h4 class="card-title"><strong>User</strong></h4>
              <div class="card-body">
                <div class="flexbox-mb-20">
                <div class="btn-toolbar" style="padding-bottom:20px;">
                    <div class="btn-group btn-group-sm">
                      <a class="btn btn-info" href="{{url('admin/user/create')}}"><i class="fa fa-plus"></i> Add New Data</a>
                    </div>
                  </div>
                </div>
                <table id="bla" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>No Telp</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($user as $key => $b)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $b->name}}</td>
                      <td>{{ $b->username}}</td>
                      <td>{{ $b->telp}}</td>
                      <td>{{ $b->password}}</td>
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