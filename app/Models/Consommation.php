<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consommation extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nconsommation',
        'clients_Codeclient',
    ];

    public function client()
    {
        return $this->belongsTo(clients::class,"clients_Codeclient","Codeclient");
    }
}
