<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    protected $guarded = ["id"];

    public function reservations() {
        return $this->hasMany(Reservation::class, 'client_id');
    }
}
