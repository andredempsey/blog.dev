@extends('layouts.master')

@section('content')

<div class="container" id="topParagraph">
	<button type="button" class="btn btn-default pull-right">{{link_to_action('PostsController@index', 'back')}}</button>
	<h2>{{{ $post->title }}}</h2>
	<h6>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</h6>
	<hr>
	<p>{{{ $post->body }}}</p>

</div>
@stop
