<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bedrijfnaam', 
        'employees',
        'telefoonnummer',
        'email',
        'website',
        'adres',
        'postcode',
        'plaats',
        'land',
        'oprichtingsdatum',
        'sector',
        'activiteiten',
        'x',
        'facebook',
        'linkedin',
        'instagram'
        

   
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vacatures()
    {
        return $this->hasMany(Vacature::class);
    }

    protected $casts = [
        'oprichtingsdatum' => 'datetime',
    ];

    


}
