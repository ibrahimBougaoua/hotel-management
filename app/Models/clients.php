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
    public function reservations()
    {
        return $this->hasMany(Reservation::class,"clients_Codeclient","Codeclient");
    }

    public function consommations()
    {
        return $this->hasMany(Consommation::class,"clients_Codeclient","Codeclient");
    }
}
