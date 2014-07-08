@extends('layouts.master')

@section('content')

<!-- Page Title -->
<div class="section section-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Posts</h1>
			</div>
		</div>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="row">
			<!-- Blog Post -->
			<div class="col-sm-10">
	        <!-- Posts List -->
	        <div class="section blog-posts-wrapper">
		    	<div class="container">
					<div class="row">
					    <!-- Sidebar -->
						<div class="col-sm-5 blog-sidebar" style="margin-bottom:800px">
							<h4>Search our Blog</h4>
							{{ Form::model($posts, array('action' => array('PostsController@index'), 'method' => 'GET')) }}
								{{Form::label('title','Title Search', array('class' => 'form-group'))}}
								@if ($isFiltered) 
									{{link_to_action('PostsController@index', 'Show All')}}
								@endif
								{{Form::text('searchTitle', null, array('class' => 'form-control', 'id' => 'appendedInputButtons'))}}
									<span class="input-group-btn">
										{{Form::Submit('Search', array('class' => 'btn btn-md pull-right', 'id' => 'submit'))}}
									</span>
							{{Form::close()}}
							<h4>Recent Posts</h4>
							<ul class="recent-posts">
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Sed sit amet metus sit</a></li>
								<li><a href="#">Nunc et diam volutpat tellus ultrices</a></li>
								<li><a href="#">Quisque sollicitudin cursus felis</a></li>
							</ul>
							<h4>Categories</h4>
							<ul class="blog-categories">
								<li><a href="#">Lorem ipsum</a></li>
								<li><a href="#">Sed sit amet metus</a></li>
								<li><a href="#">Nunc et diam </a></li>
								<li><a href="#">Quisque</a></li>
							</ul>
							<h4>Archive</h4>
							<ul>
								<li><a href="#">June 2014</a></li>
								<li><a href="#">July 2014</a></li>
							</ul>
						</div>
						<!-- End Sidebar -->
						<!-- Post -->
						@foreach ($posts as $post)
						<div class="col-md-7">
							<div class="blog-post">
								<!-- Post Info -->
								<div class="post-info">
									<div class="post-date">
										<div class="date">{{ $post->created_at->format('F jS Y @ h:i:s A')}}</div>
									</div>
									<div class="post-comments-count">
										<a href="page-blog-post-right-sidebar.html" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>11</a>
									</div>
								</div>
								<!-- End Post Info -->
								<!-- Post Image -->
								<div class="crop">
								@if($post->img_path)
									<img src="{{{$post->img_path}}}" class="img-responsive img" alt="Post Title">
								@else 
									<img src="/img/blog-large.jpg" class="img-responsive img" alt="Post Title">
								@endif
								</div>
								<!-- End Post Image -->
								<!-- Post Title & Summary -->
								<div class="post-title">
									<h3>{{link_to_action('PostsController@show', $post->title,array($post->id))}}</h3>
								</div>
								<div class="post-summary">
									<p>
										{{{substr($post->body, 0, 150)}}}
									</p>
								</div>
								<!-- End Post Title & Summary -->
								<div class="post-more">
									{{link_to_action('PostsController@show', 'Read ...', array($post->id))}}
								</div>
							</div>
						</div>
						@endforeach
						<!-- End Post -->
					</div>
					<div class="text-center">{{ $posts->links() }}</div>
				</div>
		    </div>
		    <!-- End Posts List -->
			</div>
		</div>
	</div>
</div>
@stop
