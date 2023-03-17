<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function add_author(){
        $author = new Author();
        $author->username = "shayam";
        $author->password = "shayam@12";
        $author->save();
    }
}
