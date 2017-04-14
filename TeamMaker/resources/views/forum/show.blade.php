@extends('default')

@section('title')
   {{ $unJeux["nom"] }}
@stop

@section('forumActivation')
   active
@stop


@section('content')

@foreach($unJeux->sujets as $unSujet)

<div class="showback">
                <a href="{{ route('sujet.show', $unSujet['id']) }}"><h4><i class="fa fa-angle-right"></i> {{$unSujet["titre"]}}</h4></a> <div class="text-left"><p> {{$unSujet["created_at"]}}</p></div>
              <p>Nom de l'auteur</p>
</div>

@endforeach

<div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Créer un nouveau Topic</h4>
                      <div class="form-horizontal style-form" method="get">
                          <div class="form-group">
    {{ Form::open(array('route' => ['forum.store'],'method'=>'POST')) }}
    	{{ Form::hidden('jeux_id', $unJeux["id"]) }}
        <label class="col-sm-2 col-sm-2 control-label">Titre</label>
        <div class="col-sm-10">
        {{ Form::text('titre', '',['class'=>'form-control','placeholder'=>'titre']) }}
    	</div>   
    	<label class="col-sm-2 col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
        {{ Form::textarea('description', '',['class'=>'form-control','placeholder'=>'Description']) }}
        </div>
     </div>
    <button type="submit" class="btn btn-success">Créer</button>
{{ Form::close() }}











					</div>
              </div>

@stop