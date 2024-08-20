<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patient_per;
use App\Models\maladie;



class traitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pat',
        'id_maladie',
        'obsirvation',
        'date_debut_trait',
        'date_fain_trait',
        'etat_fin_pat',
    ];

    public function patient()
    {
        return $this->belongsTo(patient_per::class, 'id_pat');
    }

    public function maladie()
    {
        return $this->belongsTo(Maladie::class, 'id_maladie');
    }
}
