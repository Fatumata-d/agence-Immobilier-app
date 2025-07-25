<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = ["id"];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
