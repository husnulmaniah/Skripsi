@extends('layout.Mlogin');
@section('content')
<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="../assets/img/PMI.png" alt="logo" width="150" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Registertasi</h4></div>

              <div class="card-body">
                <form method="POST" action="{{Route('RegisCreate')}}" class="needs-validation" novalidate="">
                @csrf
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your Username
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">name</label>
                    <input id="name" type="text" class="form-control" name="name" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your Name
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="level">level</label>
                    <select name="level" id="level" class="form-control">
                        <option >--Pilih Level--</option>
                        <option value="admin">Admin</option>
                        <option value="umum">Umum</option>
                        <option value="khusus">Khusus</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="foto">foto</label>
                    <input id="foto" type="text" class="form-control" name="foto" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your Foto
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Save
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              have an account? <a href="{{Route('Login')}}">Login</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection()
