<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Palang Merah Indonesia &mdash; (PMI)</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
        <div class="main-content">
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
                  </div>
                </div>
              </div>
        </div>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  @yield('footer')
</body>
</html>
