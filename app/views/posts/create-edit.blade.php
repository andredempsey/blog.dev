@extends('layouts.master')
@section('content')
<div class="container">
	@if(isset($post))
		<h3 id="topParagraph">Edit Post</h3>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->slug), 'method' => 'PUT', 'files' => true)) }}
	@else
		<h3 id="topParagraph">New Post</h3>
		{{Form::open(array('action'=>'PostsController@store', 'files' => true))}}
	@endif
	{{$errors->first('title','<span class="help-block">:message</span>')}}
	{{$errors->first('body','<span class="help-block">:message</span>')}}

	{{Form::file('image')}}

	{{Form::label('title','Title')}}
	{{Form::text('title', null, array('class' => 'form-control'))}}

	{{Form::label('body','Body')}}
	<div class="wmd-panel">
		<div id="wmd-button-bar"></div>
		{{Form::textarea('body', Input::old('body'), array('class' => 'wmd-input', 'id' => 'wmd-input'))}}
	</div>
	<div><h3>Edit Preview</h3></div>
	<div id="wmd-preview" class="wmd-panel wmd-preview"></div>
	{{Form::Submit('Save', array('class' => 'btn btn-default form-group', 'id' => 'submit'))}}
	{{Form::close()}}
</div>
@stop
@section('bottom-script')
<script type="text/javascript" src="/js/Markdown.Converter.js"></script>
<script type="text/javascript" src="/js/Markdown.Sanitizer.js"></script>
<script type="text/javascript" src="/js/Markdown.Editor.js"></script>

<script type="text/javascript">
	var converter = Markdown.getSanitizingConverter();
	var editor = new Markdown.Editor(converter);
	editor.run();
</script>
@stop
