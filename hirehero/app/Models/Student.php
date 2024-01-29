<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        

        'voornaam',
        'familienaam',
        'email',
        'telefoonnummer',
        'school',
        'opleiding',
        'password',
        'role',
        'interesse',
        'interesse2',
        'desinteresse1',
        'desinteresse2',
        'stageBegin',
        'stageEinde',
        'cv',
        'remember_token',
        'persoonlijkheid',
        

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function setCombinedPhoneNumberAttribute($value)

    {

        $this->attributes['prefix'] = substr($value, 0, 3); // adjust as needed
        $this->attributes['telefoonnummer'] = substr($value, 9); // adjust as needed

    }

    public function getCombinedPhoneNumberAttribute()

    {

        return $this->prefix . $this->telefoonnummer;

    }

    //Persoonlijkheid moet minstens

/*
    public static function saveFormdata($data) {
        return self::create($data);
    }

    public static function updateFormdata($data) {
        return self::update($data);
    }



*/

    







}
