@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>
            <a href="/articles/{{$article->id}}">{{$article->name}}</a>
            <a href="/articles/{{$article->id}}/edit">edit</a>
        </h2>
        <br>
        <a href="/articles/{{$article->id}}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
        {{--<a href="{{ route('articles.destroy', ['id' => $article['id']]) }}" data-method="delete"
           rel="nofollow">Удалить</a> --}}
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
