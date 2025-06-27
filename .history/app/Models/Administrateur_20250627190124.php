<?php

namespace App\Models;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Administrateur extends Model
{
    protected $guarded = ["id"];

    public function agents() {
        return $this->hasMany(Agent::class, 'administrateur_id');
    }
}
