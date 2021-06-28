<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palang Merah Indonesia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2>Data Laporan Pendonor Sukarela</h2>
    <table class="table table-bordered table-md text-center">
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
                <th>Golongan Darah</th>
                <th>Resus</th>
                <th>Ds/Dp</th>
                <th>Baru/Ulang</th>
                <th>Donor Terakhir</th>
                <th>Donor Ke</th>
                <th>Jam</th>
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
                <td>{{$d->gol}}</td>
                <td>{{$d->resus}}</td>
                <td>{{$d->dsdp}}</td>
                <td>{{$d->baru}}</td>
                <td>{{$d->donorTerakhir}}</td>
                <td>{{$d->donorKe}}</td>
                <td>{{$d->jam}}</td>
            </tr>
            @endforeach()
        </tbody>
    </table>
</body>
</html>