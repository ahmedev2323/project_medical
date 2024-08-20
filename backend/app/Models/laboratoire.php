<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patient_per;


class laboratoire extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pat',
        'observation',
        'date',
    ];

    public function patient()
    {
        return $this->belongsTo(patient_per::class, 'id_pat');
    }
}
