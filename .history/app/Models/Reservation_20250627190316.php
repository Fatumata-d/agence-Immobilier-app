<?php

namespace App\Models;

use App\Models\Client;
use App\Models\BienImmobilier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    protected $guarded = ["id"];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function bienImmobilier() {
        return $this->belongsTo(BienImmobilier::class, 'bien_immobilier_id');
    }
}
