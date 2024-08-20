<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class FarmerInvitation extends Model
{
    use HasFactory;

    protected $table = 'farmer_invitation';
    public $incrementing = false;
    protected $keyType = 'string';

    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'invitation_id');
    }

    public function farmer()
    {
        return $this->belongsTo(Farmer::class, 'farmer_id');
    }
}
