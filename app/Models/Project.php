<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Project extends Model
{
    use HasFactory;

    public function farmers()
    {
        return $this->belongsToMany(Farmer::class, 'farmer_project', 'project_id', 'farmer_id');
    }
}
