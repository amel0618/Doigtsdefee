<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'prix',
        'temps',
        'categorie_id',
        'type_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }


}
