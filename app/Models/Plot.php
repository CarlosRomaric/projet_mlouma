<?php

namespace App\Models;


class Plot extends Model
{
    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    public function speculations()
    {
        return $this->belongsToMany(Speculation::class, 'plot_speculation', 'plot_id', 'speculation_id')->using(PlotSpeculation::class);
    }
}
