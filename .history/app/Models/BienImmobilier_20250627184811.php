<?php

namespace App\Models;

use App\Models\TypeBien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BienImmobilier extends Model
{
    protected $guarded = ["id"];

    public function typeBien() {
        return $this->belongsTo(TypeBien::class, 'type_bien_id');
    }

    
}
