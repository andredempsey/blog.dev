@extends('layouts.master')
@section('content')
<div class="container">
	@if(isset($post))
		<h3 id="topParagraph">Edit Post</h3>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
	@else
		<h3 id="topParagraph">New Post</h3>
		{{Form::open(array('action'=>'PostsController@store', 'files' => true))}}
	@endif
	{{$errors->first('title','<span class="help-block">:message</span>')}}
	{{$errors->first('body','<span class="help-block">:message</span>')}}


		{{Form::label('title','Title')}}
		{{Form::text('title', null, array('class' => 'form-control'))}}

		{{Form::label('body','Body')}}
		{{Form::textarea('body', null, array('class' => 'form-control'))}}
		{{Form::file('image')}}
		{{Form::Submit('Submit', array('class' => 'btn btn-default form-group', 'id' => 'submit'))}}

	{{Form::close()}}
</div>
@stop
