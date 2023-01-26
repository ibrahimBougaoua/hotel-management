<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestations extends Model
{
    use HasFactory;

    protected $fillable = [
        'CodePrestation',
        'DesignationPrest',
       
    ];

    public function consommations()
    {
        return $this->belongsToMany(Consommation::class,"concerner","prestations_id","consomations_id");
    }

}
