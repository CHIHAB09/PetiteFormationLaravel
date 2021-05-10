@extends('layout.app')

@section('content')
    <h1>{{ $post->content }}</h1>

    <span>{{ $post->image ? $post->image->path : "il n'y a pas d'image"   }}</span>

<hr>
<!-- 
    premiere methode

    {{-- appel de la methode comments ci-dessous --}}
@foreach ($post->comments as $comment)

    <div> {{ $comment->content }} </div>

@endforeach -->

<!-- petite technique au cas ou le tableau est vide on passe direct a l etape suivante -->
@forelse ($post->comments as $comment )
    <div> {{ $comment->content }} | crée le {{ $comment->created_at->format('d-m-Y') }} </div>
@empty
    <span>Aucun commentaire n'est enregister pour ce post...</span>
@endforelse

@endsection