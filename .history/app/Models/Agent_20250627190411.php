<?php

namespace App\Models;

use App\Models\Administrateur;
use App\Models\BienImmobilier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    protected $guarded = ["id"];

    public function biens() {
        return $this->hasMany(BienImmobilier::class, 'agent_id');
    }

    public function administrateur() {
        return $this->belongsTo(Administrateur::class, 'administrateur_id');
    }

    public function reservations() {
        return $this->hasMany(Reservation::class, 'agent_id');
    }
}
