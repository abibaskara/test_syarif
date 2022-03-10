<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $guarded = [];

    public function Matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }

    public function Nilai()
    {
        return $this->belongsTo('App\Models\Nilai', 'id_dosen');
    }
}