<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';
    protected $fillable = [
        'nik',
        'judul_laporan',
        'isi_laporan',
        'tanggal_kejadian',
        'tanggal_laporan',
        'lampiran',
        'status_laporan',
    ];

    public function user()
    {
        return $this->hasMany('App\User', 'id', 'nik');
    }

    
}
