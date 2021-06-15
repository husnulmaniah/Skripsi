<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusModels extends Model
{
    protected $table='status_pegawai';
    protected $fillable=[
        'statusPegawai'
    ];
}
