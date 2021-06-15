<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan PDF Data Pendonor Sukarela</title>
</head>
<body>
    <div class="row">
        <h1 align="center">Laporan PDF Data Pendonor Sukarela</h1>
        <table class="static" align="center" border="1px" style="width: 100$;">
            <thead class="text-center bg-dark" style="border: 1px;">
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
            <tbody class="text-center bg-light">
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
</body>
</html>