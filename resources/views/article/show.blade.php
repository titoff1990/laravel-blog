@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
@endsection
<a href="/articles">К списку статей</a>
<a href="{{$article->id}}/edit">Обновить</a>
<a href="{{$article->id}}" data-method="delete" rel="nofollow">Удалить</a>
