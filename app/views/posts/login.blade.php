@extends('layouts.master')
@section('content')
<div class="container">
<h3 id="topParagraph">Login</h3>
{{ Form::model($user, array('action' => array('PostsController@update', $user->id), 'method' => 'PUT')) }}
	
	// {{$errors->first('username','<span class="help-block">:message</span>')}}
	// {{$errors->first('password','<span class="help-block">:message</span>')}}


	{{Form::label('title','Username (email)')}}
	{{Form::text('username', null, array('class' => 'form-control'))}}

	{{Form::label('body','Password')}}
	{{Form::password('password', null, array('class' => 'form-control'))}}

	{{Form::Submit('Login', array('class' => 'btn btn-default form-group', 'id' => 'submit'))}}

{{Form::close()}}
</div>
@stop
