@extends('layouts.master')

@section('content')

<div class="container" id="topParagraph">
	<p><span class="badge pull-right">{{$number}} posts</span>
	<button type="button" class="btn btn-default">{{link_to_action('PostsController@create','New Post')}}</button></p>
	<table class="table table-hover table-striped">
		<tr>
			<th>Title</th>
			<th style="text-align: center">Date Posted</th>
			<th style="text-align: center">Last Updated</th>
			<th style="text-align: center">Actions</th>
		</tr>
		@foreach ($posts as $post)
		    <tr>
		    	<td>{{link_to_action('PostsController@show', $post->title,array($post->id))}}</td>
			    <td style="text-align: center">{{ $post->created_at->format('F jS Y @ h:i:s A')}}</td>
			    <td style="text-align: center">{{ $post->updated_at->diffForHumans() }}</td>
			    <td style="text-align: center"><button type="button" class="btn btn-default">{{link_to_action('PostsController@edit', 'edit', array($post->id))}}</button></td>
		    </tr>
		@endforeach
    </table>
    <div class="text-center">{{ $posts->links() }}</div>
</div>
@stop
