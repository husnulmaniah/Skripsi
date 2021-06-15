<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SentPesanModel extends Model
{
    protected $table = 'sent_mes';
    protected $fillable= [
        'pesanId',
        'contakId',
    ];

    public function Pesan()
    {
        return $this->belongsTo(PesanModel::class,"pesanId","id");
    }
    public function Pendonor()
    {
        return $this->belongsTo(PendonorModel::class,"contakId","id");
    }
}
