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
}
