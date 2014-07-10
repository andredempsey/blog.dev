@extends('layouts.master')

@section('content')
<!-- Page Title -->
<div class="section section-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Post</h1>
			</div>
		</div>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="row">
			<!-- Blog Post -->
			<div class="col-sm-8">
				<div class="blog-post blog-single-post">
					<div class="pull-right">{{link_to_action('PostsController@index', 'Back to All Posts')}}</div>
					<div class="single-post-title">
						<h3>{{{ $post->title }}}</h3>
						<h5>{{{$post->user->first_name . " " . $post->user->last_name . " (" . $post->user->email . ")"}}}</h3>
					@if(Auth::check() && (Auth::user()->id == $post->user_id || Auth::user()->is_admin))
						{{ Form::model($post, array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
							{{Form::submit('Delete', array('class' => 'btn-danger pull-right'))}}
						{{Form::close()}}
						<button class="btn-success pull-right">{{link_to_action('PostsController@edit', 'edit', array($post->id))}}</button>
					@endif
					</div>
					<div class="single-post-info">
						<i class="glyphicon glyphicon-time"></i>{{{ $post->created_at->format('l, F jS Y @ h:i:s A')}}} 
					</div>
					<div class="single-post-image">
						@if($post->img_path)
							<img src="{{{$post->img_path}}}" class="img-responsive" alt="Post Title">
						@else 
							<img src="/img/blog-large.jpg" class="img-responsive" alt="Post Title">
						@endif
					</div>
					<div class="single-post-content">
						<p>{{$post->renderBody()}}</p>
					</div>
				</div>
			</div>
			<!-- End Blog Post -->
		</div>
	</div>
</div>
@stop
@section('bottom-script')
<script type="text/javascript">
	$(".deletePost").click(function() {
		var postID = $(this).data('postid');
		$("#deleteForm").attr('action', '/posts/' + postId);
		if(confirm("Are you sure you want to delete this post?")) {
			$('#deleteForm').submit();
		}
	});
</script>
@stop

