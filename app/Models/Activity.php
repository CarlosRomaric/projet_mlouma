<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    public function plot()
    {
        return $this->belongsTo(Plot::class, 'plot_id');
    }

    public function speculation()
    {
        return $this->belongsTo(Speculation::class, 'speculation_id');
    }

    public function type_entretien()
    {
        return $this->belongsTo(TypeEntretien::class, 'type_entretien_id');
    }

    public function type_produit()
    {
        return $this->belongsTo(TypeProduit::class, 'type_produit_id');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function farmer(){
        return $this->belongsTo(Farmer::class, 'farmer_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
