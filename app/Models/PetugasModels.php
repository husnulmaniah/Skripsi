<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetugasModels extends Model
{
    protected $table='petugas';
    protected $fillable=[
        'nama',
        'alamat',
        'tempatLahir',
        'tanggalLahir',
        'ponsel',
        'jabatanId',
        'tenagaId',
        'pendidikanId',
        'tingkatPend_Id',
        'statusPegawai_Id'
    ];

    public function Jabatan()
     {
         return $this->belongsTo(JabatanModels::class,"jabatanId","id");
         
     }
     public function Tenaga()
     {
         return $this->belongsTo(TenagaModel::class, "tenagaId", "id");
         
     }
     public function Pendidikan()
     {
         return $this->belongsTo(PendidikanModels::class,"pendidikanId","id");
     }
     public function TingkatPend()
     {
         return $this->belongsTo(TpendidikanModels::class, "tingkatPend_Id", "id");
         
     }
     public function StatusPeg()
     {
         return $this->belongsTo(StatusModels::class,"statusPegawai_Id","id");
     }
}
