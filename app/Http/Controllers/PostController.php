<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $posts =[
            'Mon premier titre',
            'Mon deuxieme titre'

        ];

        /* $title= 'Mon premier titre';
        $title2= 'Mon deuxieme titre'; */

        // une methode pour afficher le $title
       /*  return view('articles',compact('title')); */

       //2eme methode pour afficher title
       /* return view('articles')->with('title', $title); */

       //troisieme methode pour afficher plusieur variables
       /* return view('articles',compact('title','title2')); */

       /* return view('articles', compact('posts')); */

       //methode avec un tableau
        return view('articles',[
            'posts' => $posts
        ]);
    
    }
    public function show($id)
    {
        $posts = [
            1 => 'mon titre number 1',
            2 => 'mon titre number 2'
        ];

        $post = $posts[$id] ?? 'pas encore de titre';

        return view('article', [
            'post' => $post
        ]);

    }
    public function contact()
    {
        return view('contact');
    }

}
