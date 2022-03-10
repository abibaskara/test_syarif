<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $guarded = [];

    
    public function Dosen()
    {
        return $this->belongsTo('App\Models\Dosen', 'id_dosen');
    }

    public function Nilai()
    {
        return $this->belongsTo('App\Models\Nilai', 'id_matkul');
    }
}