<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //Een student kan een review schrijven over een bedrijf
    //We hebben dus de student_id nodig, de company_id, de rating van een schaal van 1 tot 5 en de review zelf
    //Ook wanneer die review is gemaakt
    protected $fillable = [
        'student_id',
        'company_id',
        'rating',
        'review',
        'created_at'
    ];

    protected $table = 'reviews';

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'review_id');
    }

    
}
