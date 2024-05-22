<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie; 
class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all(); 
        @dd($movies);  
        //return view('movies.index');
    }
    public function show($id){
        //codice per recuperare il film
    }
}
