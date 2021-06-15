<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JabatanModels extends Model
{
    protected $table = 'jabatans';
    protected $fillable = 
    [
        'jabatan'
    ];

    public function Jabatan()
    {
        return $this->hasMany(JabatanModels::class);
        
    }
}
