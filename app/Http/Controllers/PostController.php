<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class PostController extends Controller
{
    public function add_post($authorID){
        $author = Author::find($authorID);

        $post = new Post();
        $post->title = "tittle 05";
        $post->cat = "cat 02";

        $author->post()->save($post);

    }

    public function show_posts_by_author_id($author_id){

        if(Author::find($author_id)){

            $author = Author::find($author_id);
            $posts = Author::find($author_id)->posts;


            echo "<pre>Author: ";
            print_r($author->toArray());
            echo "</pre>";
            echo "<pre>Posts: ";
            print_r($posts->toArray());
            echo "</pre>";
            exit;
        }else{
            echo "Author not found";
        }

    }

    public function show_author_by_post_id($post_id){
        if(Post::find($post_id)){
            $post = Post::find($post_id);
            $author = Post::find($post_id)->author;

            echo "<pre>Post: ";
            print_r($post->toArray());
            echo "</pre>";

            echo "<pre>author: ";
            print_r($author->toArray());
            echo "</pre>";
            exit;

        }
    }
}
