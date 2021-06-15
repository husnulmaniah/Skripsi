<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AftapModels extends Model
{
    protected $table='aftaps';
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
