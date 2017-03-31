@extends('default')

@section('title')
    Créer une news	
@stop

                          
@section('content')

{{ Form::open(array('route' => 'article.store')) }}
<br>
<div class="form-group">
    {{ Form::label('titre','Titre',['class'=>'col-sm-2 col-sm-2 control-label']) }}
    {{ Form::text('titre', '',['class'=>'form-control','placeholder'=>'Insérez le titre ici']) }}
</div>
<div class="form-group">
    {{ Form::label('contenu','Contenu',['class'=>'col-sm-2 col-sm-2 control-label']) }}
    {{ Form::text('contenu', '',['class'=>'form-control','placeholder'=>'Insérez le contenu ici']) }}
</div>   

<button type="submit" class="btn btn-success">Créer</button>
{{ Form::close() }}

@stop