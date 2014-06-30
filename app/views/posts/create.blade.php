@extends('layouts.master')
@section('contentPostCreate')
<h3 id="topParagraph">New Post</h3>
<form method="POST" action="{{{ action('PostsController@store')}}}">
	<label for="title">Title:</label>	
	<input type="text" id="title" name="title"value="{{{ Input::old('title') }}}">
	<label for="body">Body:</label>
	<textarea id="body" name= "body">{{{ Input::old('body') }}}</textarea>
	<input type="submit">
</form>

@stop
