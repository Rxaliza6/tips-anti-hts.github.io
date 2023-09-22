<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function play()
    {
        return redirect('/')->with('playing', true);
    }
}
