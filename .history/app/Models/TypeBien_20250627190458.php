<?php

namespace App\Models;

use App\Models\BienImmobilier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeBien extends Model
{
    protected $guarded = ["id"];

    public function biens() {
        return $this->hasMany(BienImmobilier::class, 'type_bien_id');
    }
}
