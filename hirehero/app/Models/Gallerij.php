<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallerij extends Model
{
    use HasFactory;
    protected $table = 'galleries';

    protected $fillable = [
        'company_profile_id',
        'image'
    ];

    public function companyProfile()
    {
        return $this->belongsTo(CompanyProfile::class);
    }


}
