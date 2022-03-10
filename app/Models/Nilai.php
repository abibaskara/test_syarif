<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';
    protected $guarded = [];

    public function Mahasiswa()
    {
        return $this->hasMany('App\Models\Mahasiswa', 'id', 'id_mahasiswa');
    }

    public function Matakuliah()
    {
        return $this->hasMany('App\Models\Matakuliah', 'id', 'id_matkul');
    }

    public function Dosen()
    {
        return $this->hasMany('App\Models\Dosen', 'id', 'id_dosen');
    }


}