<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'Codeclient',
        'Nom',
        'Prenom',
        'Adresse',
        'Ville',
        'CP',
        'Pays',
        'Tel',
        'Email',
  
    ];
}
