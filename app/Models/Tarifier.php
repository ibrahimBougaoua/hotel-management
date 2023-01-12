<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifier extends Model
{
    use HasFactory;
    protected $fillable = [
        'TarifUnitaire',
        'categorie_CodeCategorie',
        'classes_Nbreetoile',

   
    ];
}
