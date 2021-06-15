@extends('layout.Master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Petugas AFTAP</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Forms</a></div>
            <div class="breadcrumb-item">Form Validation</div>
        </div>
        </div>
        <div class="row">
          <div class="col-2 col-md-2 col-lg-2">
            <div class="card">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myInput">
                <i class="fas fa-plus-circle"> Input Data</i>
            </button>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Table Petugas AFTAP</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>No Handphone</th>
                                <th>Jenis Jabatan</th>
                                <th>Jenis Tenaga</th>
                                <th>Pendidikan</th>
                                <th>Tingkat Pendidikan</th>
                                <th>Status Kepegawaian</th>
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
                                <td>{{$d->nama}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->tempatLahir}}</td>
                                <td>{{$d->tanggalLahir}}</td>
                                <td>{{$d->ponsel}}</td>
                                <td>{{$d->Jabatan->jabatan}}</td>
                                <td>{{$d->Tenaga->tenaga}}</td>
                                <td>{{$d->Pendidikan->pendidikan}}</td>
                                <td>{{$d->TingkatPend->tingkatPendidikan}}</td>
                                <td>{{$d->StatusPeg->statusPegawai}}</td>
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
    <div class="modal" id="myInput">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Input Petugas AFTAP</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <form method="POST" action="{{Route('CreatePetugas')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="nama">Nama Lengkap</label>
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="alamat">Alamat</label>
                          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                        </div>
                      </div>
                    <div class="form-row">                                
                        <div class="form-group col-md-6">
                            <label for="tempatLahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Tanggal Lahir">
                          </div>
                    </div>
                    <div class="form-row">                                
                        <div class="form-group col-md-6">
                          <label for="ponsel">No Handphone</label>
                          <input type="text" class="form-control" id="ponsel" name="ponsel" placeholder="No Handphone">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="d-block">Jabatan</label>
                            <select name="jabatanId" id="jabatan" class="form-control">
                                <option>--Pilih Jenis Jabatan--</option>
                                @foreach ($Jabatan as $j)
                                <option value="{{$j->id}}">{{$j->jabatan}}</option>                                            
                                @endforeach
                            </select>
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="d-block">Jenis Tenaga</label>
                            <select name="tenagaId" id="tenaga" class="form-control">
                                <option>--Pilih Jenis Tenaga--</option>
                                @foreach ($Tenaga as $t)
                                    <option value="{{$t->id}}">{{$t->tenaga}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="d-block">Pendidikan</label>
                            <select name="pendidikanId" id="pendidikan" class="form-control">
                                <option>--Pilih Jenis Pendidikan--</option>
                                @foreach ($Pendidikan as $p)
                                    <option value="{{$p->id}}">{{$p->pendidikan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="d-block">Tingkat Pendidikan</label>
                            <select name="tingkatPend_Id" id="tingkatPend_Id" class="form-control">
                                <option>--Pilih Tingkat Pendidikan--</option>
                                @foreach ($TingkatPend as $tp)
                                    <option value="{{$tp->id}}">{{$tp->tingkatPendidikan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="d-block">Status Kepegawaian</label>
                            <select name="statusPegawai_Id" id="statusPegawai_Id" class="form-control">
                                <option>--Pilih Status Pegawai--</option>
                                @foreach ($StatusPeg as $sp)
                                    <option value="{{$sp->id}}">{{$sp->statusPegawai}}</option>
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
    @foreach ($data as $dt)
        
    <!-- The Modal -->
    <div class="modal" id="myModal-{{$dt->id}}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Petugas AFTAP</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="{{url('Petugas/update',$dt->id)}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama" name="nama" value="{{$dt->nama}}">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="alamat">Alamat</label>
                              <input type="text" class="form-control" id="alamat" name="alamat" value="{{$dt->alamat}}">
                            </div>
                          </div>
                        <div class="form-row">                                
                            <div class="form-group col-md-6">
                                <label for="tempatLahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="{{$dt->tempatLahir}}">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="{{$dt->tanggalLahir}}">
                              </div>
                        </div>
                        <div class="form-row">                                
                            <div class="form-group col-md-6">
                              <label for="ponsel">No Handphone</label>
                              <input type="text" class="form-control" id="ponsel" name="ponsel" value="{{$dt->ponsel}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="d-block">Jabatan</label>
                                <select name="jabatanId" id="jabatan" class="form-control">
                                    <option>{{$dt->jabatanId}}</option>
                                    @foreach ($Jabatan as $j)
                                    <option value="{{$j->id}}">{{$j->jabatan}}</option>                                            
                                    @endforeach
                                </select>
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="d-block">Jenis Tenaga</label>
                                <select name="tenagaId" id="tenaga" class="form-control">
                                    <option>--Pilih Jenis Tenaga--</option>
                                    @foreach ($Tenaga as $t)
                                        <option value="{{$t->id}}">{{$t->tenaga}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="d-block">Pendidikan</label>
                                <select name="pendidikanId" id="pendidikan" class="form-control">
                                    <option>--Pilih Jenis Pendidikan--</option>
                                    @foreach ($Pendidikan as $p)
                                        <option value="{{$p->id}}">{{$p->pendidikan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="d-block">Tingkat Pendidikan</label>
                                <select name="tingkatPend_Id" id="tingkatPend_Id" class="form-control">
                                    <option>--Pilih Tingkat Pendidikan--</option>
                                    @foreach ($TingkatPend as $tp)
                                        <option value="{{$tp->id}}">{{$tp->tingkatPendidikan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="d-block">Status Kepegawaian</label>
                                <select name="statusPegawai_Id" id="statusPegawai_Id" class="form-control">
                                    <option>--Pilih Status Pegawai--</option>
                                    @foreach ($StatusPeg as $sp)
                                        <option value="{{$sp->id}}">{{$sp->statusPegawai}}</option>
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
    @endforeach
</div>
@endsection()