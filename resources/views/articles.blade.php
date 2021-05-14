<!-- appel du layout-->
@extends('layout.app')

@section('content')
    <h1>Liste des articles</h1>
        <!-- Si j'ai au moins 1 post  -->
        @if($posts->count() > 0)
        <!-- alors on boucle -->
            @foreach($posts as $post)
                <h3><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
            @endforeach
        <!-- sinon message -->
        @else
            <span>Il n'y a pas encore de post dans la db...</span>
        @endif
        
@endsection