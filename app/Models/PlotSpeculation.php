<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PlotSpeculation extends Pivot
{
    use HasFactory;

    protected $table = 'plot_speculation';
    public $incrementing = false;
    protected $primaryKey = ['plot_id', 'speculation_id'];

    public function plot()
    {
        return $this->belongsTo(Plot::class, 'plot_id');
    }

    public function speculation()
    {
        return $this->belongsTo(Speculation::class, 'speculation_id');
    }

    public function insertRecord(array $values, array $options = [])
    {
        $this->removeIdFromValues($values);
        return parent::insertRecord($values, $options);
    }

    protected function removeIdFromValues(array &$values)
    {
        if (isset($values['id'])) {
            unset($values['id']);
        }
    }
}
