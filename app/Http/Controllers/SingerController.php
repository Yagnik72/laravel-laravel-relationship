<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Singer;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function add_singer(){
        // $song = Song::find();
        $singer = new Singer();
        $singer->name = "Yo Yo Honey Singh";
        $singer->save();

        $songsids = [1,5,3];
        $singer->songs()->attach($songsids);
    }

    // Get singer Based on Song ID
    public function show_singer($songID){

        $singer = Song::find($songID)->singers;
        $song = Song::find($songID);

        echo "<pre>Song: ";
        print_r($song->toArray());
        echo "</pre>";

        echo "<pre>Singer: ";
        print_r($singer->toArray());
        echo "</pre>";
        exit;

    }
}
