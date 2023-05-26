<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    protected $fillable = [
        'date',
        'heure',
        'nom_client',
        'telephone_client',
        'id_technicien_onglerie',
    ];

    public function technicienOnglerie()
    {
        return $this->belongsTo(TechnicienOnglerie::class, 'id_technicien_onglerie');
    }
}
