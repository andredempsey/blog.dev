@extends('layouts.master')
@section('content')
<div class="container">
	<h3 id="topParagraph">New Post</h3>
	<form method="POST" action="{{{ action('PostsController@store')}}}">
		<div class="form-group">
			<label for="title" >Title:</label>	
			<input type="text" class ="form-control" id="title" name="title"value="{{{ Input::old('title') }}}">
			<label for="body" >Body:</label>
			<textarea id="body" class ="form-control" name= "body">{{{ Input::old('body') }}}</textarea>
		</div>
		<button type="submit" class="btn btn-default form-group">Submit</button>
	</form>
</div>
@stop
