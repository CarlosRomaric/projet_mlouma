<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Invitation extends Model
{
    use HasFactory;

    public function agribusiness()
    {
        return $this->belongsTo(Agribusiness::class,'agribusiness_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class,'region_id');
    }

    public function farmers()
    {
        return $this->belongsToMany(Farmer::class)->using(InvitationFarmer::class);
    }
}
