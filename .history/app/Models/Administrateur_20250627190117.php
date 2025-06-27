<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    protected $guarded = ["id"];

    public function agents() {
     return $this->hasMany(Agent::class, 'administrateur_id');
    }
}
