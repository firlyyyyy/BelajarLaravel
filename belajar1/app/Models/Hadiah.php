<?php

namespace App\Models;

use App\Models\Anggota;
use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    protected $table = 'hadiah';

    public function anggota()
    {
        return $this->belongsToMany(Anggota::class);
    }
}
