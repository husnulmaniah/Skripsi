@extends('layout.Master')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Tambah User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Forms</a></div>
        <div class="breadcrumb-item">Form Validation</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Form Tambah User</h2>

      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form method="post" action="{{Route('UserCreate')}}">
            @csrf
                <div class="card-header">
                <h4>Tambah User</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="name">name</label>
                        <input id="name" type="text" class="form-control" name="name" tabindex="1" required autofocus>
                    </div>
                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
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
                    </div>
                </div>
                <div class="card-footer text-right">
                <button class="btn btn-primary"><i class="fas fa-plus-circle"></i> Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Tabel Jenis Tenaga</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th>Foto</th>
                      <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                      $no=1;
                  @endphp
                @foreach ($data as $tg)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$tg->username}}</td>
                      <td>{{$tg->name}}</td>
                      <td>{{$tg->password}}</td>
                      <td>{{$tg->level}}</td>
                      <td>{{$tg->foto}}</td>
                      <td>
                        <a href="User/{{$tg->id}}/Delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection()