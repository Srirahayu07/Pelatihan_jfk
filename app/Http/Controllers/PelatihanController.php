<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use App\Peserta;

class PelatihanController extends Controller
{
    public function surat()
	{
		$surat = Surat::all();

    	// mengirim data pegawai ke view index
    	return view('pelatihan.tampil',['surat' => $surat]);
	}
  public function tambahsurat(){
    return view('pelatihan.tambahsurat');
  }
  public function store(Request $request)
      {
      	$this->validate($request,[
      		'no_surat' => 'required',
      		'tgl_surat' => 'required',
          'perihal' => 'required'
      	]);

          Surat::create([
            'no_surat' => $request->no_surat,
        		'tgl_surat' => $request->tgl_surat,
            'perihal' => $request->perihal
      	]);


      	return redirect('/pelatihan');
      }
      public function tambahpeserta(){
        $peserta = Peserta::all();

        return view('pelatihan.peserta',['peserta' => $peserta]);
      }
      public function store1(Request $request)
          {
          	$this->validate($request,[
          		'nip' => 'required',
          		'nama' => 'required',
              'tmt_pns' => 'required',
              'sk_cpns' => 'required',
          		'sk_pns' => 'required',
              'pangkat' => 'required',
              'sk_kp_terakhir' => 'required',
          		'unit_kerja' => 'required',
              'pendidikan_terakhir' => 'required',
              'ijazah' => 'required',
          		'jabatan' => 'required',
              'jenis_pelatihan' => 'required',
              'jenis_usulan_formasi' => 'required',
          		'email' => 'required',
              'no_telp' => 'required'
          	]);

              Peserta::create([
                'nip' => $request->nip,
            		'nama' => $request->nama,
                'tmt_pns' => $request->tmt_pns,
                'sk_cpns' => $request->sk_cpns,
            		'sk_pns' => $request->sk_pns,
                'pangkat' => $request->pangkat,
                'sk_kp_terakhir' => $request->sk_kp_terakhir,
            		'unit_kerja' => $request->unit_kerja,
                'pendidikan_terakhir' => $request->pendidikan_terakhir,
                'ijazah' => $request->ijazah,
            		'jabatan' => $request->jabatan,
                'jenis_pelatihan' => $request->jenis_pelatihan,
                'jenis_usulan_formasi' => $request->jenis_usulan_formasi,
            		'email' => $request->email,
                'no_telp' => $request->no_telp
          	]);


          	return redirect('/pelatihan/peserta');
          }

      public function edit($id){
      $peserta = Peserta::find($id);
      return view('pelatihan.peserta',['peserta' => $peserta]);
    }
    public function delete($id){
      $peserta = \App\Peserta::find($id);
      $peserta->delete($peserta);
      return redirect('/pelatihan/peserta');
    }
    public function update($id, Request $request){
      $this->validate($request,[
        'nip' => 'required',
        'nama' => 'required',
        'tmt_pns' => 'required',
        'sk_cpns' => 'required',
        'sk_pns' => 'required',
        'pangkat' => 'required',
        'sk_kp_terakhir' => 'required',
        'unit_kerja' => 'required',
        'pendidikan_terakhir' => 'required',
        'ijazah' => 'required',
        'jabatan' => 'required',
        'jenis_pelatihan' => 'required',
        'jenis_usulan_formasi' => 'required',
        'email' => 'required',
        'no_telp' => 'required'
      ]);

      $peserta = Peserta::find($id);

          $peserta->nip = $request->nip;
            $peserta->nama = $request->nama;
            $peserta->tmt_pns = $request->tmt_pns;
            $peserta->sk_cpns = $request->sk_cpns;
            $peserta->sk_pns = $request->sk_pns;
        $peserta->pangkat = $request->pangkat;
            $peserta->sk_kp_terakhir = $request->sk_kp_terakhir;
            $peserta->unit_kerja = $request->unit_kerja;
            $peserta->pendidikan_terakhir = $request->pendidikan_terakhir;
            $peserta->ijazah = $request->ijazah;
            $peserta->jabatan = $request->jabatan;
            $peserta->jenis_pelatihan = $request->jenis_pelatihan;
            $peserta->jenis_usulan_formasi = $request->jenis_usulan_formasi;
            $peserta->email = $request->email;
            $peserta->no_telp = $request->no_telp;


      return redirect('/pelatihan/peserta');
    }
  }
