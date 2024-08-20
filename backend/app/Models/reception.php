<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patient_per;
use App\Models\personnel_soignant;
use App\Models\doctore;




class reception extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pat',
        'id_per',
        'id_doctore',
        'type_consult',
        'observation',
        'frais_consult',
        'date_consult',
    ];

    public function patient()
    {
        return $this->belongsTo(patient_per::class, 'id_pat');
    }

    public function personnel()
    {
        return $this->belongsTo(personnel_soignant::class, 'id_per');
    }

    public function doctore()
    {
        return $this->belongsTo(doctore::class, 'id_doctore');
    }
}
