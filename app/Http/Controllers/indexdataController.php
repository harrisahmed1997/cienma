<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexdataController extends Controller
{
    //

    public function indexpageData(){
        // $movies = DB::table('movies')->get()->toArray();
        $movies = DB::select("SELECT * from movies order by movieId DESC LIMIT 3");
        $upcomingmovies = DB::select("SELECT * from movies where movieStatus = 'Showing'");
        $upcomingmoviessoon = DB::select("SELECT * from movies where movieStatus = 'Upcoming'");
        return view('index',compact("movies","upcomingmovies","upcomingmoviessoon"));
        // return var_dump($movies);
    }
}
