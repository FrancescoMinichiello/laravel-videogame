<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $videogames_list = Videogame::all();
        return view('videogames.index', compact('videogames_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("videogames.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $videogame = Videogame::findOrFail($id);
        return view("videogames.show", compact("videogame"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
