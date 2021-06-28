@extends('layout.Master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Form Pendonor Sukarela</h1>
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
            <a class="btn btn-warning" target="-blank" href="{{Route('PrintPendonor')}}"><i class="fas fa-print"> Laporan</i></a>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Table Pendonor Sukarela</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-md text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor ID</th>
                                <th>Nama Lengkap</th>
                                <th>No Handphone</th>
                                <th>Email</th>
                                <th>Nomor Kartu</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Kecamatan</th>
                                <th>Kota</th>
                                <th>Pekerjaan</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Umur</th>
                                <th>Penghargaan</th>
                                <th>Golongan Darah</th>
                                <th>Resus</th>
                                <th>Ds/Dp</th>
                                <th>Baru/Ulang</th>
                                <th>Donor Terakhir</th>
                                <th>Donor Ke</th>
                                <th>Jam</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td></td>
                                <td>{{$d->noId}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->ponsel}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->noKartu}}</td>
                                <td>{{$d->jk}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->Kecamatan}}</td>
                                <td>{{$d->Kota}}</td>
                                <td>{{$d->pekerjaan->pekerjaan}}</td>
                                <td>{{$d->tempatLahir}}</td>
                                <td>{{$d->TanggalLahir}}</td>
                                <th></th>
                                <td>{{$d->penghargaan}}</td>
                                <td>{{$d->gol}}</td>
                                <td>{{$d->resus}}</td>
                                <td>{{$d->dsdp}}</td>
                                <td>{{$d->baru}}</td>
                                <td>{{$d->donorTerakhir}}</td>
                                <td>{{$d->donorKe}}</td>
                                <td>{{$d->jam}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-{{$d->id}}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a href="Pendonor/{{$d->id}}/delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                  <h4 class="modal-title">Input Pendonor Sukarela</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <form method="POST" action="{{Route('CreatePendonor')}}">
                  @csrf
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="noId">Nomor Id</label>
                        <input type="text" class="form-control" id="noId" name="noId" placeholder="Nomor Id">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                      </div>
                    </div>
                  <div class="form-row">                                
                      <div class="form-group col-md-6">
                          <label for="ponsel">No Handphone</label>
                          <input type="text" class="form-control" id="ponsel" name="ponsel" placeholder="No Handphone">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="email" >Email</label>
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                      </div>
                  </div>
                  <div class="form-row">                                
                      <div class="form-group col-md-6">
                        <label for="noKartu">Nomor Kartu</label>
                        <input type="text" class="form-control" id="noKartu" name="noKartu" placeholder="Nomor Kartu">
                      </div>
                      <div class="form-group col-md-6">
                          <label class="d-block">Jenis Kelamin</label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" value="Laki-Laki" id="jk">Laki-Laki
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jk" value="Perempuan" id="jk">Perempuan
                          </div>
                      </div>
                    </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="pekerjaan_id">Pekerjaan</label>
                          <select name="pekerjaan_id" id="pekerjaan_id" class="form-control">
                            <option>--Pilih Pekerjaan--</option>
                              @foreach ($dataP as $dp)
                                  <option value="{{$dp->id}}">{{$dp->pekerjaan}}</option>
                              @endforeach
                          </select>
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
                      <div class="form-group col-md-3">
                          <label class="d-block">Penghargaan</label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="Tidak Ada" checked>
                            <label class="form-check-label" for="penghargaan">Tidak Ada</label> 
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="10x" checked>
                            <label class="form-check-label" for="penghargaan">10x</label> 
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="25x" checked>
                              <label class="form-check-label" for="penghargaan">25x</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="50x" checked>
                              <label class="form-check-label" for="penghargaan">50x</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="75x" checked>
                              <label class="form-check-label" for="penghargaan">75x</label>
                          </div>
                        </div>
                        <div class="form-group col-md-3">
                          <label class="d-block">Golongan Darah</label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gol" id="gol" value="A" checked>
                            <label class="form-check-label" for="gol">A</label> 
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gol" id="gol" value="B" checked>
                            <label class="form-check-label" for="gol">B</label> 
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gol" id="gol" value="O" checked>
                            <label class="form-check-label" for="gol">O</label> 
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gol" id="gol" value="AB" checked>
                            <label class="form-check-label" for="gol">AB</label> 
                          </div>
                        </div>
                        <div class="form-group col-md-3">
                          <label class="d-block">Resus</label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="resus" id="resus" value="+" checked>
                            <label class="form-check-label" for="resus">+</label> 
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="resus" id="resus" value="-" checked>
                            <label class="form-check-label" for="resus">-</label> 
                          </div>
                        </div>
                        <div class="form-group col-md-3">
                          <label class="d-block">DS/DP</label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dsdp" id="dsdp" value="DS" checked>
                            <label class="form-check-label" for="dsdp">DS</label> 
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dsdp" id="dsdp" value="DP" checked>
                            <label class="form-check-label" for="dsdp">DP</label> 
                          </div>
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label class="d-block">Baru/Ulang</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="baru" id="baru" value="Baru" checked>
                          <label class="form-check-label" for="baru">Baru</label> 
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="baru" id="baru" value="Ulang" checked>
                          <label class="form-check-label" for="baru">Ulang</label> 
                        </div>
                      </div>                                
                      <div class="form-group col-md-3">
                        <label for="donorTerakhir">Donor Terakhir</label>
                        <input type="date" class="form-control" id="donorTerakhir" name="donorTerakhir" placeholder="Donor Terakhir">
                      </div>                                
                      <div class="form-group col-md-3">
                        <label for="donorKe">Donor Ke</label>
                        <input type="text" class="form-control" id="donorKe" name="donorKe" placeholder="Donor Ke">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="jam">Jam</label>
                        <input type="time" class="form-control" id="jam" name="jam" placeholder="Jam">
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
                    <h4 class="modal-title">Edit Pendonor Sukarela</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="{{url('Pendonor/update',$dt->id)}}">
                        @csrf
                            <div class="form-group">
                              <label for="noId">Nomor Id</label>
                              <input type="text" class="form-control" id="noId" name="noId" value="{{$dt->noId}}">
                            </div>
                            <div class="form-group">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama" name="nama" value="{{$dt->nama}}">
                            </div>
                            <div class="form-group">
                              <label for="ponsel">No Handphone</label>
                              <input type="text" class="form-control" id="ponsel" name="ponsel" value="{{$dt->ponsel}}">
                            </div>
                            <div class="form-group">
                              <label for="email" >Email</label>
                              <input type="text" class="form-control" id="email" name="email" value="{{$dt->email}}">
                            </div>
                            <div class="form-group">
                              <label for="noKartu">Nomor Kartu</label>
                              <input type="text" class="form-control" id="noKartu" name="noKartu" value="{{$dt->noKartu}}">
                            </div>
                            <div class="form-group">
                                <label class="d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki" checked>
                                  <label class="form-check-label" for="penghargaan">Laki-Laki</label> 
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan" checked>
                                    <label class="form-check-label" for="jk">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <input type="text" class="form-control" id="alamat" name="alamat" value="{{$dt->alamat}}">
                            </div>
                            <div class="form-group">
                              <label for="kecamatan">Kecamatan</label>
                              <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{$dt->Kecamatan}}">
                            </div>
                            <div class="form-group">
                              <label for="kota">Kota</label>
                              <input type="text" class="form-control" id="kota" name="kota" value="{{$dt->Kota}}">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_id">Pekerjaan</label>
                                <select name="pekerjaan_id" id="pekerjaan_id" class="form-control">
                                        <option value="{{$dp->pekerjaan_id}}">{{$dp->pekerjaan}}</option>
                                    @foreach ($dataP as $dp)
                                        <option value="{{$dp->id}}">{{$dp->pekerjaan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                              <label for="tempatLahir">Tempat Lahir</label>
                              <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="{{$dt->tempatLahir}}">
                            </div>
                            <div class="form-group">
                              <label for="tanggalLahir">Tanggal Lahir</label>
                              <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="{{$dt->TanggalLahir}}">
                            </div>
                            <div class="form-group">
                                <label class="d-block">Penghargaan</label>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="Tidak Ada" checked>
                                  <label class="form-check-label" for="penghargaan">Tidak Ada</label> 
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="10x" checked>
                                  <label class="form-check-label" for="penghargaan">10x</label> 
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="25x" checked>
                                    <label class="form-check-label" for="penghargaan">25x</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="50x" checked>
                                    <label class="form-check-label" for="penghargaan">50x</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penghargaan" id="penghargaan" value="75x" checked>
                                    <label class="form-check-label" for="penghargaan">75x</label>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label class="d-block">Golongan Darah</label>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gol" id="gol" value="A" checked>
                                    <label class="form-check-label" for="gol">A</label> 
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gol" id="gol" value="B" checked>
                                    <label class="form-check-label" for="gol">B</label> 
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gol" id="gol" value="O" checked>
                                    <label class="form-check-label" for="gol">O</label> 
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gol" id="gol" value="AB" checked>
                                    <label class="form-check-label" for="gol">AB</label> 
                                  </div>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="d-block">Resus</label>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resus" id="resus" value="+" checked>
                                    <label class="form-check-label" for="resus">+</label> 
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resus" id="resus" value="-" checked>
                                    <label class="form-check-label" for="resus">-</label> 
                                  </div>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label class="d-block">DS/DP</label>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dsdp" id="dsdp" value="DS" checked>
                                    <label class="form-check-label" for="dsdp">DS</label> 
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dsdp" id="dsdp" value="DP" checked>
                                    <label class="form-check-label" for="dsdp">DP</label> 
                                  </div>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="d-block">Baru/Ulang</label>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="baru" id="baru" value="Baru" checked>
                                    <label class="form-check-label" for="baru">Baru</label> 
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="baru" id="baru" value="Ulang" checked>
                                    <label class="form-check-label" for="baru">Ulang</label> 
                                  </div>
                                </div> 
                              </div>
                            <div class="form-group">
                              <label for="donorTerakhir">Donor Terakhir</label>
                              <input type="date" class="form-control" id="donorTerakhir" name="donorTerakhir" value="{{$dt->donorTerakhir}}">
                            </div>
                            <div class="form-group">
                              <label for="donorKe">Donor Ke</label>
                              <input type="text" class="form-control" id="donorKe" name="donorKe" value="{{$dt->donorKe}}">
                            </div>
                            <div class="form-group">
                              <label for="jam">Jam</label>
                              <input type="time" class="form-control" id="jam" name="jam" value="{{$dt->jam}}">
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