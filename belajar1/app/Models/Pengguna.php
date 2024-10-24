<?php

namespace App\Models;

use App\Models\Telepon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pengguna extends Model
{
    protected $fillable = ['nama'];

    public function telepon(): HasOne
    {
        return $this->hasOne(Telepon::class);
    }
}
