<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {

        $posts = Post::all();

        /* $posts = Post::orderBy('title')->take(4)->get(); */
        
         //modification d'un post d'un post

        //on recupere un post avec find()
        /* $post = Post::find(12);
        
        $post->delete();

        dd('post suprrimer!!'); */

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
    //recuperation d'un post
    public function show($id)
    {
        //recupere l id ou renvoie une page 404 no found
        //avec la methode findOrfail()
        $post = Post::findOrfail($id);

        //on recupere en fonction du title et on a eu aussi la maniere firstOrfail()
        //qui nous enverra une erreur 404
        /* $post = Post::where('title', 'Officia quae cupiditate et voluptas.')->firstOrfail(); */
        

        return view('article', [
            'post' => $post
        ]);

    }
    //cration d'un post
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        /* $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save(); */

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        dd('Post crée !');
    }

    public function contact()
    {
        return view('contact');
    }

}
