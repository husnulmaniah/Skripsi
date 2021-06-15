<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendonorModel extends Model
{
    protected $table='_pendonors';
    protected $fillable=
    [
        'noId',
        'nama',
        'ponsel',
        'email',
        'noKartu',
        'jk',
        'alamat',
        'Kecamatan',
        'Kota',
        'pekerjaan_id',
        'tempatLahir',
        'TanggalLahir',
        'penghargaan',
        'gol',
        'resus',
        'dsdp',
        'baru',
        'donorTerakhir',
        'donorKe',
        'jam'
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, "pekerjaan_id", "id");
        
    }
}
