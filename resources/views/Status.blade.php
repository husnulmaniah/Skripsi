@extends('layout.Master')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Status Pegawai</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Forms</a></div>
        <div class="breadcrumb-item">Form Validation</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Form Status Pegawai</h2>

      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="{{Route('CreateStatus')}}" method="POST">
              @csrf   
              <div class="card-header">
                <h4>Input Status Pegawai</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Status Pegawai</label>
                  <input type="text" class="form-control" name="statusPegawai" id="statusPegawai" required>
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
            <h4>Tabel Status Pegawai</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Status Pegawai</th>
                    <th>Create Data</th>
                    <th>Update Data</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $no=1;
                  @endphp
                  @foreach ($StatPeg as $sp)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$sp->statusPegawai}}</td>
                    <td>{{$sp->created_at}}</td>
                    <td>{{$sp->updated_at}}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-{{$sp->id}}">
                        <i class="fas fa-edit"></i>
                    </button>
                      <a href="Status/{{$sp->id}}/delete"><i class="fas fa-trash"></i></a>
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
  @foreach ($StatPeg as $sp)
  <div class="modal" id="myModal-{{$sp->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Status Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{url('Status/update',$sp->id)}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                        <label>Jenis Status Pegawai</label>
                        <input type="text" class="form-control" name="statusPegawai" id="statusPegawai" value="{{$sp->statusPegawai}}" required>
                        </div>
                    </div>
                    <div class="text-right mr-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
    
        </div>
    </div>
</div> 
  @endforeach
</div>
@endsection()