<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BienImmobilier extends Model
{
    protected $guarded = ["id"];

    public function typeBien() {
    return $this->belongsTo(TypeBien::class, 'type_bien_id');
    }
}
