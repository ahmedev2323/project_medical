<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patient_per;
use App\Models\reception;


class doctore extends Model
{
    use HasFactory;
    public function patients()
    {
        return $this->hasMany(patient_per::class, 'id_doctore');
    }
    public function receptions()
    {
        return $this->hasMany(reception::class, 'id_doctore');
    }
}
