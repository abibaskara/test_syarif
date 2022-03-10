<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $guarded = [];

    public function Kelas()
    {
        return $this->belongsTo('App\Models\Kelas', 'id_kelas');
    }

    public function Nilai()
    {
        return $this->belongsTo('App\Models\Nilai', 'id_mahasiswa');
    }
}