@extends('layouts.app')

@section('title', 'Список статей')
@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', ['id' => $article['id']]) }}">{{$article->name}}</a></h2>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 10)}}</div>
        <a href="{{ route('articles.edit', $article) }}">Edit</a>

        <a class="text-danger" href="{{ route('articles.destroy', ['id' => $article['id']]) }}" data-method="delete" rel="nofollow"
            data-confirm="Are you sure?">Удалить</a>
    @endforeach
@endsection
