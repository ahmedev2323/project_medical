<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\service;
use App\Models\reception;


class personnel_soignant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_per',
        'post_no_per',
        'sex_pers',
        'garde_pers',
        'function_pers',
        'telphon_person',
        'email_pers',
        'adress_pers',
        'date_naisanse',
        'date_recutment_pers',
        'id_servise',
    ];

    public function service()
    {
        return $this->belongsTo(service::class, 'id_servise');
    }
    public function receptions()
    {
        return $this->hasMany(reception::class, 'id_per');
    }
}
