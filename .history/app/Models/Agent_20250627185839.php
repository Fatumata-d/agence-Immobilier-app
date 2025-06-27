<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $guarded = ["id"];

    public function biens() {
    return $this->hasMany(BienImmobilier::class, 'agent_id');
    }
}
