<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\maladie;
use App\Models\infermier;
use App\Models\doctore;
use App\Models\hospitalisation;
use App\Models\laboratoire;
use App\Models\traitment;
use App\Models\reception;


class patient_per extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_pat',
        'post_bom_pat',
        'sex_pat',
        'adresse_pat',
        'telephone_pat',
        'email_path',
        'poids_pat',
        'date_naissance_pat',
        'id_infermier',
        'id_malde',
        'id_doctore',
    ];

    public function infermier()
    {
        return $this->belongsTo(Infermier::class, 'id_infermier');
    }

    public function maladie()
    {
        return $this->belongsTo(Maladie::class, 'id_malde');
    }

    public function doctore()
    {
        return $this->belongsTo(Doctore::class, 'id_doctore');
    }

    public function hospitalisations()
    {
        return $this->hasMany(hospitalisation::class, 'id_pat');
    }
    public function laboratoires()
    {
        return $this->hasMany(laboratoire::class, 'id_pat');
    }
    public function traitments()
    {
        return $this->hasMany(traitment::class, 'id_pat');
    }
    public function receptions()
    {
        return $this->hasMany(reception::class, 'id_pat');
    }
}
