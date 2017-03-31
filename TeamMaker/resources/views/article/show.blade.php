@extends('default')

@section('title')

@stop

@section('content')
<div>
	<div class="row">
		<div class="col-md-8 col-sm-8 mb col-md-offset-2">
		    <div class="darkblue-panel pn article">
		        <h1 class="mt"><b>{{ $unArticle["titre"] }}</b></h1>
		    </div><!-- -- /darkblue panel ---->
		</div>
	</div>
	<div class="col-md-8 col-sm-8 mb col-md-offset-2">
	    <div class="darkblue-panel pn article">
	        <p class="mt"><b>{{ $unArticle["contenu"] }}</b></p>
	        <img src="{{ url('https://lh3.googleusercontent.com/K-MNjDiO2WwRNwJqPZu8Wd5eOmFEjLYkEEgjZlv35hTiua_VylRPb04Lig3YZXLERvI=w300') }}">
	    </div><!-- -- /darkblue panel ---->
	</div>
<div>
<div class="clear">
	<a href="{{ route('article.index') }}">Retour</a> 
</div>
@foreach($unArticle->commentaires as $unCommentaire)
{{ $unCommentaire["contenu"]}}
@endforeach
@stop




