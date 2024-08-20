<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class TypeEntretien extends Model
{
    use HasFactory;

    public function activities()
    {
        return $this->hasMany(Activity::class, 'type_entretien_id');
    }
}
