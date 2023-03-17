<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Singer;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function add_song(){
        $song = new Song();
        $song->title = "Baby dump hei";

        $song->save();
    }

    // Get song Based on Singer ID
    public function show_song($singerID){

        $song = Singer::find($singerID)->songs;

        echo "<pre>";
        print_r($song->toArray());
        echo "</pre>";
        exit;

    }
}
