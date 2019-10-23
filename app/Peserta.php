<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    protected $fillable = ['nip','nama','tmt_pns','sk_cpns','sk_pns','pangkat','sk_kp_terakhir','unit_kerja','pendidikan_terakhir','ijazah','jabatan','jenis_pelatihan','jenis_usulan_formasi','email','no_telp'];
}
