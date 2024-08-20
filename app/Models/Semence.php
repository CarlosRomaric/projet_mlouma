<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Semence extends Model
{
    use HasFactory;

    public function speculation()
    {
        return $this->belongsTo(Speculation::class);
    }
}
