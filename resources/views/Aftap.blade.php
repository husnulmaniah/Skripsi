@extends('layout.Master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Petugas Pengisian</h1>
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
                  <h4>Table Petugas Pengisian</h4>
                </div>
                <div class="card-body text-center">
                  <div class="table-responsive">
                    <table class="table table-hover table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pendonor</th>
                                <th>Jenis</th>
                                <th>Nomor Kantong</th>
                                <th>Pengesahan</th>
                                <th>Jam Aftap</th>
                                <th>Status</th>
                                <th>CC</th>
                                <th>Shift</th>
                                <th>DG/MU</th>
                                <th>Instansi</th>
                                <th>Metode</th>
                                <th>Macam Donor</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1
                            @endphp
                            @foreach($aftaps as $d)
                            
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$d->Pendonor->nama}}</td>
                                <td>{{$d->jenis}}</td>
                                <td>{{$d->noKantong}}</td>
                                <td>{{$d->pengesahan}}</td>
                                <td>{{$d->jamAftap}}</td>
                                <td>{{$d->status}}</td>
                                <td>{{$d->cc}}</td>
                                <td>{{$d->shift}}</td>
                                <td>{{$d->dgmu}}</td>
                                <td>{{$d->instansi}}</td>
                                <td>{{$d->Metode}}</td>
                                <td>{{$d->macamDonor}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-{{$d->id}}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a href="PetugasAftap/{{$d->id}}/Delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                  <form method="POST" action="{{Route('CreateAftap')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6"> 
                            <select name="pendonorId" id="pendonorId" class="form-control">
                                <option>--Pilih Nama Pendonor--</option>
                                @foreach ($pendonor as $p)
                                <option value="{{$p->id}}">{{$p->nama}}</option>                                            
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6"> 
                          <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis">
                        </div>
                      </div>
                    <div class="form-row">                                
                        <div class="form-group col-md-6"> 
                            <input type="text" class="form-control" id="noKantong" name="noKantong" placeholder="Nomor Kantong">
                          </div>
                          <div class="form-group col-md-6"> 
                            <input type="text" class="form-control" id="pengesahan" name="pengesahan" placeholder="Pengesahan">
                          </div>
                    </div>
                    <div class="form-row">                                
                        <div class="form-group col-md-6"> 
                          <input type="time" class="form-control" id="jamAftap" name="jamAftap" placeholder="Jam Aftap">
                        </div>
                        <div class="form-group col-md-6"> 
                          <input type="text" class="form-control" id="status" name="status" placeholder="Status">
                        </div>                       
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4"> 
                            <input type="text" class="form-control" id="cc" name="cc" placeholder="CC">
                          </div>  
                          <div class="form-group col-md-4"> 
                            <input type="text" class="form-control" id="shift" name="shift" placeholder="Shift">
                          </div>  
                          <div class="form-group col-md-4"> 
                              <input type="text" class="form-control" id="dgmu" name="dgmu" placeholder="DG/MU">
                          </div>
                    </div>
                    <div class="form-row">   
                        <div class="form-group col-md-4"> 
                            <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi">
                        </div>  
                        <div class="form-group col-md-4"> 
                            <input type="text" class="form-control" id="metode" name="metode" placeholder="Metode">
                        </div>  
                        <div class="form-group col-md-4"> 
                            <input type="text" class="form-control" id="macamDonor" name="macamDonor" placeholder="Macam Donor">
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
    @foreach ($aftaps as $dt)
        
    <!-- The Modal -->
    <div class="modal" id="myModal-{{$dt->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Petugas AFTAP</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="{{url('PetugasAftap/Update',$dt->id)}}">
                        @csrf
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="d-block">Nama Pendonor</label>
                            <select name="pendonorId" id="pendonorId" class="form-control">
                                <option value="{{$dt->pendonorId}}">{{$dt->Pendonor->nama}}</option>
                                @foreach ($pendonor as $p)
                                <option value="{{$p->id}}">{{$p->nama}}</option>                                            
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="jenis">Jenis</label>
                          <input type="text" class="form-control" id="jenis" name="jenis" value="{{$dt->jenis}}">
                        </div>
                      </div>
                    <div class="form-row">                                
                        <div class="form-group col-md-6">
                            <label for="noKantong">Nomor Kantong</label>
                            <input type="text" class="form-control" id="noKantong" name="noKantong" value="{{$dt->noKantong}}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="pengesahan">Pengesahan</label>
                            <input type="text" class="form-control" id="pengesahan" name="pengesahan" value="{{$dt->pengesahan}}">
                          </div>
                    </div>
                    <div class="form-row">                                
                        <div class="form-group col-md-6">
                          <label for="jamAftap">Jam Aftap</label>
                          <input type="time" class="form-control" id="jamAftap" name="jamAftap" value="{{$dt->jamAftap}}">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="status">Status</label>
                          <input type="text" class="form-control" id="status" name="status" value="{{$dt->status}}">
                        </div>                       
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="cc">CC</label>
                            <input type="text" class="form-control" id="cc" name="cc" value="{{$dt->cc}}">
                          </div>  
                          <div class="form-group col-md-4">
                            <label for="shift">Shift</label>
                            <input type="text" class="form-control" id="shift" name="shift" value="{{$dt->shift}}">
                          </div>  
                          <div class="form-group col-md-4">
                              <label for="dgmu">DG/MU</label>
                              <input type="text" class="form-control" id="dgmu" name="dgmu" value="{{$dt->dgmu}}">
                          </div>
                    </div>
                    <div class="form-row">   
                        <div class="form-group col-md-4">
                            <label for="instansi">Instansi</label>
                            <input type="text" class="form-control" id="instansi" name="instansi" value="{{$dt->instansi}}">
                        </div>  
                        <div class="form-group col-md-4">
                            <label for="metode">Metode</label>
                            <input type="text" class="form-control" id="metode" name="metode" value="{{$dt->Metode}}">
                        </div>  
                        <div class="form-group col-md-4">
                            <label for="macamDonor">Macam Donor</label>
                            <input type="text" class="form-control" id="macamDonor" name="macamDonor" value="{{$dt->macamDonor}}">
                        </div>  
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