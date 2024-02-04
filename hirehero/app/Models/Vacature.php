<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacature extends Model
{
    use HasFactory;

    //Je kan een vacature aanmaken, aanpassen en verwijderen.

    protected $fillable = [
        'company_id',
        'title',
        'description',
        'minimumSkills',
        'nicetoHaveSkills',
        'persoonlijkheid',
        'categorie',
        'aantalPlaatsen',
        'sollicitatieType',
        'status'
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
