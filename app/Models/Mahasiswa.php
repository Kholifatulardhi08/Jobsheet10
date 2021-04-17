<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswa'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas_id',
        'Jurusan'
        ];
   
        public function kelas(){
            return $this->belongsTo(Kelas::class);
        }

}
