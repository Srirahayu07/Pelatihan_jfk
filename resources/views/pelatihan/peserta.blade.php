@extends('layout.master')
@section('content')
<div class="adminx-main-content">
  <div class="container-fluid">
    <!-- BreadCrumb -->
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb adminx-page-breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/pelatihan">Pelatihan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Usulan</li>
      </ol>
    </nav>

    <div class="pb-3">
      <h1>Tambah Usulan</h1>
    </div>
    <style media="screen">
      .putih{
        color:white;
      }
    </style>

    <form method="post" action="/pelatihan/store1">

      {{ csrf_field() }}
      <div class="row">
        <div class="col-lg-6">
          <div class="card mb-grid">
            <div class="card-header">
              <div class="card-header-title">Surat Usulan</div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label class="form-label">NIP</label>
                <input name="nip" class="form-control mb-2 input-credit-card" type="text" >
                <button type="submit" name="cari">Cari</button>
              </div>
              <div class="form-group">
                <label class="form-label">Nama</label>
                <input name="nama" class="form-control mb-2 input-credit-card" type="text">
              </div>

              <div class="form-group">
                <label class="form-label">TMT PNS</label>
                <input name="tmt_pns" class="form-control input-date mb-2" type="text" >
              </div>
              <div class="form-group">
                <label class="form-label">SK CPNS</label>
                <input name="sk_cpns" class="form-control input-date mb-2" type="text" >
              </div>
              <div class="form-group">
                <label class="form-label">SK PNS</label>
                <input name="sk_pns" class="form-control input-date mb-2" type="text" >
              </div>
              <div class="form-group">
                <label class="form-label">Pangkat</label>
                <input name="pangkat" class="form-control input-date mb-2" type="text" >
              </div>
              <div class="form-group">
                <label class="form-label">SK KP Terakhir</label>
                <input name="sk_kp_terakhir" class="form-control input-date mb-2" type="text">
              </div>
              <div class="form-group">
                <label class="form-label">Unit Kerja</label>
                <input name="unit_kerja" class="form-control input-date mb-2" type="text">
              </div>
              <div class="form-group">
                <label class="form-label">Pendidikan Terakhir</label>
                <input name="pendidikan_terakhir" class="form-control input-date mb-2" type="text">
              </div>
              <div class="form-group">
                <label class="form-label">Ijazah</label>
                <input name="ijazah" class="form-control input-date mb-2" type="text">
              </div>
              <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-3">
                  <select name="jabatan" class="form-control" id="jabatan" style="width: 195px">
                    <option selected disabled>-- Pilih Jabatan --</option>
                    <option value="Analis Kepegawaian">Analis Kepegawaian</option>
                    <option value="Auditor Kepegawaian">Author Kepegawaian</option>

                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="jenis_pelatihan" class="col-sm-2 col-form-label">Jenis Pelatihan</label>
                <div class="col-3">
                  <select name="jenis_pelatihan" class="form-control" id="jenis_pelatihan" style="width: 195px">
                    <option selected disabled>-- Pilih Jenis Pelatihan --</option>
                    <option value="DTS">DTS</option>
                    <option value="NON-DTS">NON-DTS</option>

                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="jenis_usulan_formasi" class="col-sm-2 col-form-label">Jenis Usulan Formasi</label>
                <div class="col-3">
                  <select name="jenis_usulan_formasi" class="form-control" id="jenis_usulan_formasi" style="width: 195px">
                    <option selected disabled>-- Pilih Jenis Usulan Formasi --</option>

  				<option value="DTS">DTS</option>
  				<option value="NON-DTS">NON-DTS</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Email</label>
                <input name="email" class="form-control input-date mb-2" type="email">
              </div>
              <div class="form-group">
                <label class="form-label">No Telepone</label>
                <input name="no_telp" class="form-control input-date mb-2" type="text">
              </div>
              <div class="row">
                <div class="col-lg-12 text-center">
                  <button type="submit" class="btn-success">Simpan</button>
                    <button class="btn-danger"><a class="putih" href="{{url('pelatihan')}}">Batal</a></button>
                </div>

              </div>


            </div>
          </div>
        </div>
        </div>
    </form>

        <div class="card mb-grid">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-header-title">Daftar Nama Calon PNS</div>
          </div>
          <div class="table-responsive-md">
            <table class="table table-actions table-striped table-hover mb-0">
              <tr>
                        <th class=" text-center" rowspan="2">NO</th>
                        <th class=" text-center" rowspan="2">Jenis Diklat</th>

                        <th class=" text-center" rowspan="2">NIP</th>

                        <th class=" text-center" rowspan="2">Nama</th>
                        <th class=" text-center" rowspan="2">Pendidikan</th>
                        <th class=" text-center" rowspan="2">Pangkat</th>

                        <th class=" text-center" rowspan="2">Unit Kerja</th>
                        <th class=" text-center" rowspan="2">Jenis Usulan</th>
                        <th class=" text-center" rowspan="2">Email</th>

                        <th class=" text-center" rowspan="2">No. Telp/HP</th>
                        <th class=" text-center" colspan="4">Dokumen</th>
                        <th class=" text-center" rowspan="2">Tanggal Input</th>
                        <th class=" text-center" rowspan="2">Opsi</th>
                        <tr>
                          <th class=" text-center">Ijazah</th>
                          <th class=" text-center">SK CPNS</th>
                          <th class=" text-center">SK PNS</th>
                          <th class=" text-center">SK KP</th>
                        </tr>

                      </tr>
                      @php
                        $no = 1;
                      @endphp
                      @foreach ($peserta as $p)
                        <tr>
                          <td class=" text-center">{{ $no }}</td>
                          <td class=" text-center">{{ $p->jenis_pelatihan }}</td>
                          <td class=" text-center">{{ $p->nip }}</td>
                          <td class=" text-center">{{ $p->nama }}</td>
                          <th class=" text-center">{{ $p->pendidikan_terakhir}}</th>
                          <td class=" text-center">{{ $p->pangkat }}</td>
                          <td class=" text-center">{{ $p->unit_kerja }}</td>
                          <td class=" text-center">{{ $p->jenis_usulan_formasi }}</td>
                          <th class=" text-center">{{ $p->email}}</th>
                          <td class=" text-center">{{ $p->no_telp }}</td>
                          <td class=" text-center">{{ $p->ijazah }}</td>
                          <td class=" text-center">{{ $p->sk_cpns }}</td>
                          <th class=" text-center">{{ $p->sk_pns}}</th>
                          <td class=" text-center">{{ $p->sk_kp_terakhir }}</td>
                          <td class=" text-center">{{ $p->created_at }}</td>
                          <td class=" text-center">
                            <a href="/pelatihan/peserta/{{$p->id}}/edit" class=" btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Edit</a>
                            <a href="/pelatihan/peserta/{{$p->id}}/delete" class=" btn btn-success btn-sm">Hapus</i></a>
                          </td>
                          @php
                            $no++;
                          @endphp
                        @endforeach
                        </tr>

            </table>

          </div>
        </div>
        <a href="#" class="btn btn-sm btn-danger">+ Tambah Calon Peserta</a>
        <a href="#" class="btn btn-sm btn-secondary">Ubah Data Surat</a>
        <a href="#" class="btn btn-sm btn-primary">Kirim</a>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pelatihan/peserta/{{$peserta->id}}/update" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label class="form-label">NIP</label>
                          <input value="{{$peserta->nip}}" name="nip" class="form-control mb-2 input-credit-card" type="text" >
                          <button type="submit" name="cari">Cari</button>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Nama</label>
                          <input value="{{$peserta->nama}}" name="nama" class="form-control mb-2 input-credit-card" type="text">
                        </div>

                        <div class="form-group">
                          <label class="form-label">TMT PNS</label>
                          <input value="{{$peserta->tmt_pns}}" name="tmt_pns" class="form-control input-date mb-2" type="text" >
                        </div>
                        <div class="form-group">
                          <label class="form-label">SK CPNS</label>
                          <input value="{{$peserta->sk_cpns}}" name="sk_cpns" class="form-control input-date mb-2" type="text" >
                        </div>
                        <div class="form-group">
                          <label class="form-label">SK PNS</label>
                          <input value="{{$peserta->sk_pns}}" name="sk_pns" class="form-control input-date mb-2" type="text" >
                        </div>
                        <div class="form-group">
                          <label class="form-label">Pangkat</label>
                          <input value="{{$peserta->pangkatt}}" name="pangkat" class="form-control input-date mb-2" type="text" >
                        </div>
                        <div class="form-group">
                          <label class="form-label">SK KP Terakhir</label>
                          <input value="{{$peserta->sk_kp_terakhir}}" name="sk_kp_terakhir" class="form-control input-date mb-2" type="text">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Unit Kerja</label>
                          <input value="{{$peserta->unit_kerja}}" name="unit_kerja" class="form-control input-date mb-2" type="text">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Pendidikan Terakhir</label>
                          <input value="{{$peserta->pendidikan_terakhir}}" name="pendidikan_terakhir" class="form-control input-date mb-2" type="text">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Ijazah</label>
                          <input value="{{$peserta->ijazah}}" name="ijazah" class="form-control input-date mb-2" type="text">
                        </div>
                        <div class="form-group row">
                          <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                          <div class="col-3">
                            <select name="jabatan" class="form-control" id="jabatan" style="width: 195px">

                              <option value="Analis Kepegawaian" @if($peserta->jabatan == 'Analisis Kepegawaian') selected @endif>Analis Kepegawaian</option>
                              <option value="Auditor Kepegawaian" @if($peserta->jabatan == 'Auditor Kepegawaian') selected @endif>Auditor Kepegawaian</option>

                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="jenis_pelatihan" class="col-sm-2 col-form-label">Jenis Pelatihan</label>
                          <div class="col-3">
                            <select name="jenis_pelatihan" class="form-control" id="jenis_pelatihan" style="width: 195px">

                              <option value="DTS" @if($peserta->jenis_pelatihan == 'DTS') selected @endif>DTS</option>
                              <option value="NON-DTS" @if($peserta->jenis_pelatihan == 'NON-DTS') selected @endif>NON-DTS</option>

                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="jenis_usulan_formasi" class="col-sm-2 col-form-label">Jenis Usulan Formasi</label>
                          <div class="col-3">
                            <select name="jenis_usulan_formasi" class="form-control" id="jenis_usulan_formasi" style="width: 195px">
                              <option value="DTS" @if($peserta->jenis_pelatihan == 'DTS') selected @endif>DTS</option>
                              <option value="NON-DTS" @if($peserta->jenis_pelatihan == 'NON-DTS') selected @endif>NON-DTS</option>

                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Email</label>
                          <input value="{{$peserta->email}}" name="email" class="form-control input-date mb-2" type="email">
                        </div>
                        <div class="form-group">
                          <label class="form-label">No Telepone</label>
                          <input value="{{$peserta->no_telp}}" name="no_telp" class="form-control input-date mb-2" type="text">
                        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button></div>


        </form>

    </div>
    </div>
  </div>
@endsection
