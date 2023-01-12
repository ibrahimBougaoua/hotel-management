<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'NResevation',
        'DateDebut',
        'DateFin',
        'DatePayeArrhes',
        'MontantArrhes',
        'chambre_Nchambre',
        'clients_Codeclient',
    ];
}
