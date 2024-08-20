<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Region extends Model
{
    use HasFactory;

    public function departements()
    {
        return $this->hasMany(Departement::class);
    }

    public function agribusinesses(){
        return $this->hasMany(Agribusiness::class);
    }

    public function farmers(){
        return $this->hasMany(Farmer::class);
    }

    public function invitations(){
        return $this->hasMany(Invitation::class);
    }

    
}
