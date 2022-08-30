@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    <h2>TEST</h2>
    <h1><a href="{{ route('logout') }}">выйти</a></h1>
<h2><a href="/articles/create">Добавить статью</a></h2>
    @foreach ($articles as $article)
       <h1><a href="articles/{{$article->id}}">{{$article->name}}</h1>
        <p>{{Str::limit($article->body, 200)}}</p>
    @endforeach
@endsection
