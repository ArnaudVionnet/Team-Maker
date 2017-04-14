@extends('default')



@section('title')
Accueil
@endsection

@section('content')

<div class="form-panel">
	<div style="text-align:center">
		<form class="form-inline" role="form">
			<div class="form-group">
			    <label class="sr-only" for="exampleInputEmail2">Recherche</label>
			    <input class="form-control" id="exampleInputEmail2" placeholder="Votre recherche" type="email">
			</div>
			<button type="submit" class="btn btn-theme fa fa-search"></button>
		</form>
	</div>
</div><!-- /form-panel -->
    
<div class="form-panel">
<h4>Derniers articles</h4>
@foreach($lesArticles as $unArticle)
	<div class="showback">
	  <div class="alert alert-title"><b><a href="{{ route('article.show',$unArticle['id']) }}">{{ $unArticle["titre"] }}</a></b>
	  Publié par l'Auteur le {{ $unArticle["created_at"] }} </div>
	  <div class="centered">
	  <p>{{ $unArticle["contenu"] }}</p>
	  <img class="reduce" src="{{ url('https://lh3.googleusercontent.com/K-MNjDiO2WwRNwJqPZu8Wd5eOmFEjLYkEEgjZlv35hTiua_VylRPb04Lig3YZXLERvI=w300') }}">
	  </div>
	</div>
@endforeach
</div>   

<div class="form-panel">
<h4>Derniers jeux</h4>
@foreach($lesJeux as $unJeu)
	<div class="showback">
	  <div class="alert alert-title"><b><a href="{{ route('article.show',$unJeu['id']) }}">{{ $unJeu["nom"] }}</a></b>
	  Publié par l'Auteur le {{ $unJeu["created_at"] }} </div>
	  <div class="centered">
	  <p>{{ $unJeu["description"] }}</p>
	  </div>
	</div>
@endforeach
</div> 

@endsection
