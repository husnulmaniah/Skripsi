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
    </section>
  </div>

@endsection