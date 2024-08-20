<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Speculation extends Model
{
    use HasFactory;

    // Modèle Speculation
    public function plots()
    {
        return $this->belongsToMany(Plot::class, 'plot_speculation', 'speculation_id', 'plot_id')->using(PlotSpeculation::class);
    }

    public function semences()
    {
        return $this->hasMany(Semence::class);
    }
}
