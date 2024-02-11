<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'school',
        'opleiding',
        'stageBegin',
        'stageEinde',
        'cv',
        'persoonlijkheid',
        'interesse',
        'interesse2',
        'desinteresse1',
        'desinteresse2',

    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function sollicitaties()
    {
        return $this->hasMany(Sollicitatie::class);
    }
}
