@extends('layout.Master')
@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Succes Message</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Forms</a></div>
          <div class="breadcrumb-item">Form Validation</div>
        </div>
      </div>
  
      <div class="section-body">  
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="alert alert-success" role="alert">
                  Pesan Terkirim
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection
