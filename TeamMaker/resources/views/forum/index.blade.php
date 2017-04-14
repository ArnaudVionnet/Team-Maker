@extends('default')

@section('title')
    Forum
@stop

@section('forumActivation')
   class="activate"
@stop


@section('content')

@foreach($lesJeux as $unJeux)
<div class="showback">
                <h4><i class="fa fa-angle-right"></i><a href="{{ route('forum.show', $unJeux['id']) }}">{{ $unJeux["nom"] }}</a></h4>
              <p>{{ $unJeux["description"] }}</p>
</div>
@endforeach

@stop