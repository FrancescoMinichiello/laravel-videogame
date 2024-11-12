<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    // Index
    public function index() {
        $videogames_list = Videogame::all();
        return view('videogames.index', compact('videogames_list'));
    }
}
