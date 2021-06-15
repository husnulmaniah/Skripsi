<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPendonorModels extends Model
{
    protected $table='datapendonors';
    protected $fillable=[
        'noTrans',
        'pendonorId',
        'petugasaftapsId',
        'petugasPengisiId'
    ];

    public function Pendonor()
    {
        return $this->belongsTo(PendonorModel::class,"pendonorId","id");
    }
    public function PetugasAftap()
    {
        return $this->belongsTo(PetugasAftapModel::class,"petugasaftapsId","id");
    }
    public function PetugasPengisi()
    {
        return $this->belongsTo(PetugasHbModels::class,"petugasPengisiId","id");
    }
}
