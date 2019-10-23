@extends('layout.master')
@section('content')


  <div class="adminx-main-content">
    <div class="container-fluid">
      <!-- BreadCrumb -->
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb adminx-page-breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Pelatihan JFK</li>
        </ol>
      </nav>

      <div class="pb-3">
        <h1>Pelatihan JFK</h1>
      </div>


      <div class="row">
        <div class="col">
          <div class="card mb-grid">
            <div class="card-header d-flex justify-content-between align-items-center">
              <div class="card-header-title">Table</div>
            </div>
            <div class="table-responsive-md">
              <table class="table table-actions table-striped table-hover mb-0">
                <tr>
                          <th class=" text-center">NO</th>
                          <th class=" text-center">No Surat</th>

                          <th class=" text-center">Tanggal Surat</th>

                          <th class=" text-center">Perihal</th>
                          <th class=" text-center">Jumlah Usulan Peserta</th>


                          <th class=" text-center">Opsi</th>

                        </tr>
                        @php
                          $no = 1;
                        @endphp
                        @foreach ($surat as $s)
                          <tr>
                            <td class=" text-center">{{ $no }}</td>
                            <td class=" text-center">{{ $s->no_surat }}</td>

                            <td class=" text-center">{{ $s->tgl_surat }}</td>
                            <td class=" text-center">{{ $s->perihal }}</td>
                            <th class=" text-center">{{ $s->jumlah}}</th>


                            <td class=" text-center">
                              <a href="/pelatihan/peserta" class=" btn btn-primary btn-sm">Tambah Usulan</a>
                              <a href="#" class=" btn btn-success btn-sm">Detail</i></a>
                            </td>
                          </tr>
                          @php
                            $no++;
                          @endphp
                        @endforeach
              </table>

            </div>
          </div>
          <a href="/pelatihan/tambah" class="btn btn-sm btn-success">Tambah Surat Usulan</a>
        </div>
      </div>


    </div>
  </div>


@endsection
