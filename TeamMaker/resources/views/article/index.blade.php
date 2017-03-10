@extends('default')

@section('title')
    Mon dashboard
@stop


@section('content')

@foreach($lesArticles as $unArticle)
<div class="row">
<div class="col-md-8 col-sm-8 mb col-md-offset-2">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>{{ $unArticle["titre"] }}</h5>
                      			</div>
                      			
								<p class="mt"><b>{{ $unArticle["contenu"] }}</b></p>
								<footer>
									<div class="centered">
										<h5><i class="fa fa-trophy"></i>Auteur :</h5>
									</div>
								</footer>
                      		</div><!-- -- /darkblue panel ---->
 
                            <div class="grey-header">
                    <h5><button data-toggle="collapse" data-target="#demo">Collapsible</button></h5>
                            </div>
                            <div id="demo" class="collapse">
                            @foreach($unArticle->commentaires as $uncommentaire)
                            {{ $uncommentaire["contenu"] }}
                  </div>@endforeach
                   <div class="col-md-8 col-sm-8 mb col-md-offset-2">
                                       </div>
                          </div>
                        </div>
                      </div>

@endforeach

@stop