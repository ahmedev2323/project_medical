<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\chambre;
use App\Models\patient_per;


class hospitalisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pat',
        'id_chambre',
        'date_arriv',
        'date_sort',
        'observation',
    ];

    public function patient()
    {
        return $this->belongsTo(patient_per::class, 'id_pat');
    }

    public function chambre()
    {
        return $this->belongsTo(Chambre::class, 'id_chambre');
    }
}
