<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'bedrijfVoorstelling',
        'doel',
        'skills',
        'gallery',
        'projects'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


}
