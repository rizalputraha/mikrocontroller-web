@extends('auth.app')

@section('title','Login')

@section('content')
<div class="row min-h-fullscreen center-vh p-20 m-0">
<div class="col-12">
  <div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
    <h5 class="text-uppercase text-center">Selamat Datang</h5>
    <br>
    <div class="text-center">
    <img class="img-fluid"src="{{asset('admin/img/logo.jpg')}}" alt="Logo" width="100px">
    </div>
    <form class="form-type-material" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="form-group">
        <input type="text" class="form-control" id="username" name="username" required>
        <label for="username">Username</label>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" required>
        <label for="password">Password</label>
      </div>

      <div class="form-group flexbox flex-column flex-md-row">
        <label class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" checked>
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Remember me</span>
        </label>

        <a class="text-muted hover-primary fs-13 mt-2 mt-md-0" href="#">Forgot password?</a>
      </div>

      <div class="form-group">
        <button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>
      </div>
    </form>
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

  </div>
</div>


<footer class="col-12 align-self-end text-center fs-13">
  <p class="mb-0"><small>Copyright © 2017 <a href="http://thetheme.io/theadmin">TheAdmin</a>. All rights reserved.</small></p>
</footer>
</div>
@endsection
