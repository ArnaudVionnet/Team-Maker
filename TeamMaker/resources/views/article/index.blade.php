@extends('default')

@section('title')
    Nouveautés à la Une
@stop

@section('content')

<div class="centered">
  <a href="{{ route('article.create') }}"><button class="btn btn-title">Nouveau</button></a>
</div>

@foreach($lesArticles as $unArticle)
<div class="showback">
  <div class="alert alert-title"><b><a href="{{ route('article.show',$unArticle['id']) }}">{{ $unArticle["titre"] }}</a></b>
  Publié par l'Auteur le {{ $unArticle["created_at"] }} </div>
  <div class="centered">
  <p>{{ $unArticle["contenu"] }}</p>
  <img src="{{ url('https://lh3.googleusercontent.com/K-MNjDiO2WwRNwJqPZu8Wd5eOmFEjLYkEEgjZlv35hTiua_VylRPb04Lig3YZXLERvI=w300') }}">
      </div>
</div>
@endforeach
@stop