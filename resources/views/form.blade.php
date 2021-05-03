@extends('layout.app')
@section('content')
    <h1>Crée un nouveau post</h1>

    <form method="POST" action="{{ route('posts.store')}}">
    {{-- csrf c est une securite fournie par laravel pour eviter une injection non voulu --}}
    @csrf
        <input type="text" name="title" class="border-gray-600 border-2">
        <textarea name="content" cols="30" rows="10" class="border-gray-600 border-2"></textarea>
        <button type="submit" class="bg-green-500">Créer</button>
    </form>
@endsection