<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patient_per;
use App\Models\traitment;


class maladie extends Model
{
    use HasFactory;

    protected $fillable = [
        'famille_malade',
        'sous_famille',
        'designation',
        'prix_traitement',
    ];

    public function patients()
    {
        return $this->hasMany(patient_per::class, 'id_malde');
    }
    public function traitments()
    {
        return $this->hasMany(traitment::class, 'id_maladie');
    }
}
