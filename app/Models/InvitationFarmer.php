<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class InvitationFarmer extends Pivot
{
    use HasFactory;

    protected $table = 'invitation_farmers';
    public $incrementing = false;
    protected $primaryKey = ['invitation_id', 'farmer_id'];


    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'invitation_id');
    }

    public function farmer()
    {
        return $this->belongsTo(Farmer::class, 'farmer_id');
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
