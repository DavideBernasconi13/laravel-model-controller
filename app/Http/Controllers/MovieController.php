<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //@dd($movies);  
        return view('movies.index', compact('movies'));
    }
    public function show($id)
    {
        //codice per recuperare il film
        $movie = Movie::findOrFail($id);
        //dd($movie);
        return view('movies.show', compact('movie'));

    }
}
