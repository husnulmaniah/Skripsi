@extends('layout.Master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Petugas</h1>
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
                  <h4>Table Petugas</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-md">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Petugas</th>
                                <th>Nama Pendonor</th>
                                <th>Tensi</th>
                                <th>HB</th>
                                <th>Aftap </th>
                                <th>input</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                          @php
                              $no=1;
                          @endphp
                            @foreach($data as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$d->Dokter->nama}}</td>
                                <td>{{$d->Pendonor->nama}}</td>
                                <td>{{$d->tensi}}</td>
                                <td>{{$d->Hb}}</td>
                                <td>{{$d->aftap}}</td>
                                <td>{{$d->input}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-{{$d->id}}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a href="PetugasHb/{{$d->id}}/delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                    <h4 class="modal-title">Input Petugas </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <form method="POST" action="{{Route('CreatePetugasHb')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="d-block">Nama Petugas</label>
                            <select name="petugasId" id="petugasId" class="form-control">
                                <option>--Pilih Nama Petugas--</option>
                                @foreach ($Dokter as $pt)
                                <option value="{{$pt->id}}">{{$pt->nama}}</option>                                            
                                @endforeach
                            </select>
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
                          <label for="tensi">Tensi</label>
                          <input type="text" class="form-control" id="tensi" name="tensi" placeholder="Tensi">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="Hb">Hb</label>
                          <input type="text" class="form-control" id="Hb" name="Hb" placeholder="Hb">
                        </div>
                        
                      </div>
                    <div class="form-row">                                
                      <div class="form-group col-md-6">
                        <label for="aftap">Aftap</label>
                        <input type="text" class="form-control" id="aftap" name="aftap" placeholder="Aftap">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="input">Input</label>
                        <input type="text" class="form-control" id="input" name="input" placeholder="Input">
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
                    <h4 class="modal-title">Edit Petugas </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="{{url('PetugasHb/update',$dt->id)}}">
                        @csrf
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label class="d-block">Nama Petugas</label>
                                  <select name="petugasId" id="petugasId" class="form-control">
                                      <option>--Pilih Nama Petugas--</option>
                                      @foreach ($Dokter as $pt)
                                      <option value="{{$pt->id}}">{{$pt->nama}}</option>                                            
                                      @endforeach
                                  </select>
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
                                <label for="tensi">Tensi</label>
                                <input type="text" class="form-control" id="tensi" name="tensi" value="{{$dt->tensi}}">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="Hb">Hb</label>
                                <input type="text" class="form-control" id="Hb" name="Hb" value="{{$dt->Hb}}">
                              </div>
                              
                            </div>
                          <div class="form-row">                                
                            <div class="form-group col-md-6">
                              <label for="aftap">Aftap</label>
                              <input type="text" class="form-control" id="aftap" name="aftap" value="{{$dt->aftap}}">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="input">Input</label>
                              <input type="text" class="form-control" id="input" name="input" value="{{$dt->input}}">
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