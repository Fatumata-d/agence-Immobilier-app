<?php

namespace App\Models;

use App\Models\BienImmobilier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    protected $guarded = ["id"];

    public function biens() {
        return $this->hasMany(BienImmobilier::class, 'agent_id');
    }

    
}
