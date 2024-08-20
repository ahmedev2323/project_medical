<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patient_per;

class infermier extends Model
{
    use HasFactory;
    public function patients()
    {
        return $this->hasMany(patient_per::class, 'id_infermier');
    }
}
