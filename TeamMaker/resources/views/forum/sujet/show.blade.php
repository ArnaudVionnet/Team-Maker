@extends('default')

@section('title')
   {{ $leSujet["titre"] }}
@stop

@section('forumActivation')
   active
@stop


@section('content')

<div class="showback">
                <p><i class="fa fa-angle-right"></i> {{$leSujet["description"]}}</p>
              <p>Nom de l'auteur</p>
              </div>


@foreach($leSujet->post as $unCommentaires)

<div class="showback">
                <p><i class="fa fa-angle-right"></i> {{$unCommentaires["contenu"]}}</p>
              <p>Nom de l'auteur</p>
              </div>

@endforeach



<div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Créer un nouveau Topic</h4>
                      <div class="form-horizontal style-form" method="get">
                          <div class="form-group">
    {{ Form::open(array('route' => ['sujet.store'],'method'=>'POST')) }}
      {{ Form::hidden('sujet_id', $leSujet["id"]) }}
      <label class="col-sm-2 col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
        {{ Form::textarea('contenu', '',['class'=>'form-control','placeholder'=>'Description']) }}
        </div>
     </div>
    <button type="submit" class="btn btn-success">Créer</button>
{{ Form::close() }}











          </div>
              </div>










@stop
