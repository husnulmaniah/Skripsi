<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetugasAftapModel extends Model
{
    protected $table='petugasaftaps';
    protected $fillable=[
        'pendonorId',
        'jenis',
        'noKantong',
        'pengesahan',
        'jamAftap',
        'status',
        'cc',
        'shift',
        'dgmu',
        'instansi',
        'Metode',
        'macamDonor'
    ];
    public function Pendonor()
    {
        return $this->belongsTo(PendonorModel::class,"pendonorId","id");
    }
}
