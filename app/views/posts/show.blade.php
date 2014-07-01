@extends('layouts.master')

@section('content')

<div class="container" id="topParagraph">
	<h3>{{{ $post->title }}}</h3>
	<h5>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</h5>
	
	<p>{{{ $post->body }}}</p>

</div>
@stop
