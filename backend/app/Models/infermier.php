<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patient_per;

class infermier extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_infe',
        'sex',
        'age',
        'date_recrt',
        'adress',
        'email',
        'telphon',
        'id_mal',
    ];
    public function patients()
    {
        return $this->hasMany(patient_per::class, 'id_infermier');
    }
}
