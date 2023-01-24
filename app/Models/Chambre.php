<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nchambre',
        'TelCh',
        'categorie_CodeCategorie',
        'hotel_Nhotel',
 
    ];

    public function reservation(){
        return $this->hasMany(Reservation::class,"chambre_Nchambre","Nchambre");

    }
    public function categorie(){
        return $this->belongsTo(Categories::class,"categorie_CodeCategorie","CodeCategorie");

    }
}
