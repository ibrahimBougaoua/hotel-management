<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nhotel',
        'NomH',
        'AdresseH',
        'CPH',
        'TelH',
        'Nbreetoile',
        'classes_Nbreetoile',
    ];

    public function chambres(){
        return $this->hasMany(Chambre::class,"hotel_Nhotel","Nhotel");

    }
}
