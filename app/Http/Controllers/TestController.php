<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class TestController extends Controller
{

    public function view($id)
    {
        $article= Article::find($id);
        /*$article->each(function($article){
            $article->category;
            $article->user;
            $article->tags;
        });*/

        $article->category;
        $article->user;
        $article->tags;
        return view('welcome',['prueba'=> $article]);
    }
    

}
