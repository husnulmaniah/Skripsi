<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesanModel extends Model
{
    protected $table= 'pesans';
    protected $fillable = [
        'id',
        'pesan',
    ];
}
