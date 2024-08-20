<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\hospitalisation;

class chambre extends Model
{
    use HasFactory;
    public function hospitalisations()
    {
        return $this->hasMany(hospitalisation::class, 'id_chambre');
    }
}
