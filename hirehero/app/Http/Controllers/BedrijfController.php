<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BedrijfController extends Controller
{
    //

    public function index() {
        return view('bedrijf.index');
    }

    public function show() {
        return $this->belongsTo(User::class);
    }
}
