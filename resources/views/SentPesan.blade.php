@extends('layout.Master')
@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Kirim Pesan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Forms</a></div>
          <div class="breadcrumb-item">Form Validation</div>
        </div>
      </div>
  
      <div class="section-body">
        <h2 class="section-title">Kirim Pesan</h2>
  
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <form action="{{Route('ApiSent')}}" method="POST">
                @csrf   
                <div class="card-header">
                  <h4>Input Kirim Pesan</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Pesan</label>
                    <select name="pesanId" id="pesan" class="form-control">
                        <option>--Pilih Pesan--</option>
                        @foreach ($pesan as $p)
                            <option value="{{$p->id}}">{{$p->pesan}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Penerima Pesan</label>
                    <select name="contakId" id="contak" class="form-control">
                        <option>--Pilih Contact--</option>
                        @foreach ($contact as $ct)
                            <option value="{{$ct->id}}">{{$ct->ponsel}}</option>
                        @endforeach
                    </select>
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
                  <h4>Table Sent Message</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pesan</th>
                                <th>Nomor Penerima</th>
                                <th>Tanggal Terima Pesan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php
                              $no=1;
                          @endphp
                            @foreach($data as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$d->Pesan->pesan}}</td>
                                <td>{{$d->Pendonor->ponsel}}</td>
                                <td>{{$d->next_msg}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-{{$d->id}}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a href="Petugas/{{$d->id}}/delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach()
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

@endsection