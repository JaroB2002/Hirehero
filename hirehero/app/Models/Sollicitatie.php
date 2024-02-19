<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sollicitatie extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'company_id',
        'vacature_id',
        'status',
        'feedback'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    protected $table = 'sollicitaties';


    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
