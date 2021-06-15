@extends('layout.Master')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Jenis Tenaga</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Forms</a></div>
        <div class="breadcrumb-item">Form Validation</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Form Jenis Tenaga</h2>

      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form method="post" action="{{Route('CreateTenaga')}}">
            @csrf
              <div class="card-header">
                <h4>Input Jenis Tenaga</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Jenis Tenaga</label>
                  <input type="text" class="form-control" name="tenaga" id="tenaga" required>
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
                      <th>Jenis Tenaga</th>
                      <th>Create Data</th>
                      <th>Update Data</th>
                      <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                      $no=1;
                  @endphp
                @foreach ($tenaga as $tg)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$tg->tenaga}}</td>
                      <td>{{$tg->created_at}}</td>
                      <td>{{$tg->updated_at}}</td>
                      <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-{{$tg->id}}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <a href="Tenaga/{{$tg->id}}/delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
   @foreach ($tenaga as $tg)
  <div class="modal" id="myModal-{{$tg->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Jenis Jabatan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{url('Tenaga/update',$tg->id)}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                        <label>Jenis Jabatan</label>
                        <input type="text" class="form-control" name="tenaga" id="tenaga" value="{{$tg->tenaga}}" required>
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