@extends('default')

@section('title')
       {{ $unArticle->titre }}
@stop

@section('content')

        {{ $unArticle->contenu }}
<br>
<img src="{{ url('https://lh3.googleusercontent.com/K-MNjDiO2WwRNwJqPZu8Wd5eOmFEjLYkEEgjZlv35hTiua_VylRPb04Lig3YZXLERvI=w300') }}">
<br>
<a href="{{ route('article.index') }}">Retour</a> 

@stop
