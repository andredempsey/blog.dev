@extends('layouts.master')

@section('content')

<div class="container" id="topParagraph">
	<p>{{ $post->title }}</p>
	<p>{{ $post->body }}</p>
</div>
@stop
