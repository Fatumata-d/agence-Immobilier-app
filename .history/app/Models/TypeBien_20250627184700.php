<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    protected $guarded = ["id"];

    public function biens() {
    return $this->hasMany(BienImmobilier::class, 'type_bien_id');
}
}
