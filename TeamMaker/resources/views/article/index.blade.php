@extends('default')

@section('title')
    Nouveautés à la Une
@stop

@section('content')

@foreach($lesArticles as $unArticle)
<div class="row">
  <div class="col-md-8 col-sm-8 mb col-md-offset-2">
    <div class="darkblue-panel pn article">
      <div class="darkblue-header">
        <a href="{{ route('article.show',$unArticle['id']) }}"><h5>{{ $unArticle["titre"] }}</h5></a>
      </div>
        <p class="mt"><b>{{ $unArticle["contenu"] }}</b></p>
        <img src="{{ url('https://lh3.googleusercontent.com/K-MNjDiO2WwRNwJqPZu8Wd5eOmFEjLYkEEgjZlv35hTiua_VylRPb04Lig3YZXLERvI=w300') }}">
      <footer>
      <div class="centered">
      </div>
      </footer>
      <p>Publié par l'Auteur le {{ $unArticle["created_at"] }}</p>
    </div><!-- -- /darkblue panel ---->
  </div>
</div>

@endforeach

@stop