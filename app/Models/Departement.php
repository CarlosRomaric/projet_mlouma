<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Departement extends Model
{
    use HasFactory;

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function agribusinesses(){
        return $this->hasMany(Agribusiness::class);
    }

    public function farmers(){
        return $this->hasMany(Farmer::class);
    }
}
