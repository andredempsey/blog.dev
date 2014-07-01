@extends('layouts.master')

@section('content')

<div class="container" id="topParagraph">
	{{link_to_action('PostsController@create','New Post')}}
	<table class="table table-hover table-striped">
		<tr>
			<th>Title</th>
			<th style="text-align: right">Date Posted</th>
		</tr>
		@foreach ($posts as $post)
		    <tr>
		    	<td>{{link_to_action('PostsController@show', $post->title,array($post->id))}}</td>
			    <td style="text-align: right">{{ $post->created_at }}</td>
		    </tr>
		@endforeach
    </table>
</div>
@stop
