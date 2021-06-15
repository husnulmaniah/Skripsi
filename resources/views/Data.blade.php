@extends('layout.Master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Form Data Pendonor</h1>
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
          <div class="col-2 col-md-2 col-lg-2">
            <div class="card">
            <a class="btn btn-warning" target="-blank" href="{{Route('PrintPDF')}}"><i class="fas fa-print"> Laporan</i></a>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Table Petugas</h4>
                </div>
                <div class="card-body text-center">
                  <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead class="text-center bg-light" style="border: 2px;">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Nomor Trans</th>
                                <th rowspan="2">Tanggal</th>
                                <th colspan="17">Pendonor</th>
                                <th colspan="10">Petugas</th>
                                <th rowspan="2">piagam</th>
                                <th colspan="6">Petugas Pengisi</th> 
                            </tr>
                            <tr>
                              <th>ID</th>
                              <th>Nama Pendonor</th>
                              <th>No Handphone</th>
                              <th>Email</th>
                              <th>Jenis Kelamin</th>
                              <th>Alamat</th>
                              <th>Kecamatan</th>
                              <th>Kota</th>
                              <th>Pekerjaan</th>
                              <th>Tempat Lahir</th>
                              <th>Tanggal Lahir</th>
                              {{-- <th>Umur </th> --}}
                              <th>Gol Darah</th>
                              <th>Resus</th>
                              <th>DS/DP</th>
                              <th>Baru/Ulang</th>
                              <th>Donor Ke</th>
                              <th>Jam</th>
                              <th>jenis</th>
                              <th>Nomor Kantong</th>
                              <th>Pengesahan</th>
                              <th>Jam Aftap</th>
                              <th>Status</th>
                              <th>CC</th>
                              <th>Shift</th>
                              <th>DG/MU</th>
                              <th>Instansi</th>
                              <th>Metode</th>
                              <th>Dokter</th>
                              <th>Tensi</th>
                              <th>Hb</th>
                              <th>Aftap</th>
                              <th>Input</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php
                              $no=1;
                          @endphp
                            @foreach($data as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$d->noTrans}}</td>
                                <td>{{$d->Pendonor->created_at}}</td>
                                <td>{{$d->Pendonor->noId}}</td>
                                <td>{{$d->Pendonor->nama}}</td>
                                <td>{{$d->Pendonor->ponsel}}</td>
                                <td>{{$d->Pendonor->email}}</td>
                                <td>{{$d->Pendonor->jk}}</td>
                                <td>{{$d->Pendonor->alamat}}</td>
                                <td>{{$d->Pendonor->Kecamatan}}</td>
                                <td>{{$d->Pendonor->Kota}}</td>
                                <td>{{$d->Pendonor->pekerjaan->pekerjaan}}</td>
                                <td>{{$d->Pendonor->tempatLahir}}</td>
                                <td>{{$d->Pendonor->TanggalLahir}}</td>
                                <td>{{$d->pendonor->gol}}</td>
                                <td>{{$d->pendonor->resus}}</td>
                                <td>{{$d->Pendonor->dsdp}}</td>
                                <td>{{$d->Pendonor->baru}}</td>
                                <td>{{$d->Pendonor->donorKe}}</td>
                                <td>{{$d->Pendonor->jam}}</td>
                                {{-- <td>{{$d->Petugas->nama}}</td>
                                <td>{{$d->Petugas->alamat}}</td> --}}
                                <td>{{$d->PetugasAftap->jenis}}</td>
                                <td>{{$d->PetugasAftap->noKantong}}</td>
                                <td>{{$d->PetugasAftap->pengesahan}}</td>
                                <td>{{$d->PetugasAftap->jamAftap}}</td>
                                <td>{{$d->PetugasAftap->status}}</td>
                                <td>{{$d->PetugasAftap->cc}}</td>
                                <td>{{$d->PetugasAftap->shift}}</td>
                                <td>{{$d->PetugasAftap->dgmu}}</td>
                                <td>{{$d->PetugasAftap->instansi}}</td>
                                <td>{{$d->PetugasAftap->Metode}}</td>
                                <td>{{$d->Pendonor->penghargaan}}</td>
                                <td>{{$d->PetugasPengisi->Dokter->nama}}</td>
                                <td>{{$d->PetugasPengisi->tensi}}</td>
                                <td>{{$d->PetugasPengisi->Hb}}</td> 
                                <td>{{$d->PetugasPengisi->aftap}}</td> 
                                <td>{{$d->PetugasPengisi->input}}</td> 
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
                  <h4 class="modal-title">Input Petugas </h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <form method="POST" action="{{Route('CreateData')}}">
                  @csrf
                  <div class="form-row">                                
                      <div class="form-group col-md-6">
                        <label for="noTrans">Nomor Trans</label>
                        <input type="text" class="form-control" id="noTrans" name="noTrans" placeholder="Nomor Trans">
                      </div>
                      <div class="form-group col-md-6">
                        <label class="d-block">Nama Pendonor</label>
                        <select name="pendonorId" id="pendonorId" class="form-control">
                            <option>--Pilih Nama Pendonor--</option>
                            @foreach ($Pendonor as $pn)
                            <option value="{{$pn->id}}">{{$pn->nama}}</option>                                            
                            @endforeach
                        </select>
                    </div>
                </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label class="d-block">Nama Petugas Aftap</label>
                          <select name="petugasaftapsId" id="petugasaftapsId" class="form-control">
                              <option>--Pilih Nama Petugas Aftap--</option>
                              @foreach ($Petugas as $ps)
                              <option value="{{$ps->id}}">{{$ps->Pendonor->nama}}</option>                                            
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group col-md-6">
                          <label class="d-block">Nama Petugas Hb</label>
                          <select name="petugasPengisiId" id="petugasPengisiId" class="form-control">
                              <option>--Pilih Nama Petugas HB--</option>
                              @foreach ($PetugasPengisi as $pt)
                              <option value="{{$pt->id}}">{{$pt->Dokter->nama}}</option>                                            
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
</div>
@endsection()