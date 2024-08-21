<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\personnel_soignant;

class service extends Model
{
    use HasFactory;
    protected $fillable = [
        'desgination_serv',
    ];
    public function personnels()
    {
        return $this->hasMany(personnel_soignant::class, 'id_servise');
    }
}
