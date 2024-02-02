<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $filable = [
        'user_id',
        'company_id',
        'functie'
];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
