@extends('layouts.master')

@section('content')

<div class="container" id="topParagraph">
	<button type="button" class="btn btn-default pull-right">{{link_to_action('PostsController@index', 'Back')}}</button>
	<h2>{{{ $post->title }}}</h2>
	<h6>{{{ $post->created_at->format('l, F jS Y @ h:i:s A')}}}</h6>
	<hr>
	<p>{{{ $post->body }}}</p>
	
	{{ Form::model($post, array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
		{{Form::submit('Delete', array('class' => 'btn btn-danger pull-right'))}}
	{{Form::close()}}
</div>
@stop
