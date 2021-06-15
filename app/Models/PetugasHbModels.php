<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetugasHbModels extends Model
{
    protected $table='petugas_hbs';
    protected $fillable=[
        'dokterId',
        'pendonorId',
        'tensi',
        'Hb',
        'aftap',
        'input',
    ];

    public function Dokter()
    {
        return $this->belongsTo(PetugasModels::class,"dokterId","id");
        
    } 
    public function Pendonor()
    {
        return $this->belongsTo(PendonorModel::class,"pendonorId","id");
    }
    public function Tensi()
    {
        return $this->belongsTo(PetugasModels::class,"tensi","id");
        
    }
    public function HB()
    {
        return $this->belongsTo(PetugasModels::class,"Hb","id");
        
    }
    public function Aftap()
    {
        return $this->belongsTo(PetugasModels::class,"aftapId","id");
        
    }
    public function Input()
    {
        return $this->belongsTo(PetugasModels::class,"input","id");
        
    }
}