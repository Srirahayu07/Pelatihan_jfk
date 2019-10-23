@extends('layout.master')
@section('content')
<div class="adminx-main-content">
  <div class="container-fluid">
    <!-- BreadCrumb -->
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb adminx-page-breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Surat Usulan</li>
      </ol>
    </nav>

    <div class="pb-3">
      <h1>Tambah Surat Usulan</h1>
    </div>
    <style media="screen">
      .putih{
        color:white;
      }
    </style>

    <form method="post" action="/pelatihan/store">

    {{ csrf_field() }}
    <div class="row">
      <div class="col-lg-6">
        <div class="card mb-grid">
          <div class="card-header">
            <div class="card-header-title">Surat Usulan</div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label class="form-label">Nomor Surat</label>
              <input name="no_surat" class="form-control mb-2 input-credit-card" type="text" placeholder="Masukkan Nomor Surat">
            </div>
            <div class="form-group">
              <label class="form-label">Tanggal Surat</label>
              <input name="tgl_surat" class="form-control mb-2 input-credit-card" type="text" placeholder="Masukkan Tanggal Surat">
            </div>

            <div class="form-group">
              <label class="form-label">Perihal</label>
              <input name="perihal" class="form-control input-date mb-2" type="text" placeholder="Masukkan Perihal">
            </div>

            <div class="form-group">
              <label class="form-label">Upload</label>
              <input class="form-control input-numeral mb-2" name="gambar" type="file">
            </div>
            <div class="row">
              <div class="col-lg-12 text-center">

                <button type="submit" class="btn-success">Simpan</button>
                <button class="btn-sm btn-danger"><a class="putih" href="/pelatihan">Batal</a></button>
              </div>

            </div>


          </div>
        </div>
      </div>
      </div>
    </form>
  </div>
</div>

@endsection
