<?php

namespace App\Models;

use App\Models\Hadiah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Anggota extends Model
{
    protected $table = 'anggota';

    public function hadiah(): BelongsToMany
    {
        return $this->belongsToMany(Hadiah::class);
    }
}
