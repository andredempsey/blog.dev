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
						<div class="col-sm-5 blog-sidebar">
							<h4>Search our Blog</h4>
							{{ Form::model($posts, array('action' => array('PostsController@index'), 'method' => 'GET', 'class' => 'form-search')) }}
								<div class="pull-right"><span class="badge">{{{$number . " posts"}}}</span></div>
								@if ($isFiltered) 
									{{link_to_action('PostsController@index', 'Show All')}}
								@endif
								{{Form::text('searchTitle', null, array('class' => 'search-query', 'id' => 'appendedInputButtons', 'placeholder' => 'Blog Title'))}}
								{{Form::Submit('Search', array('class' => 'search-query', 'id' => 'submit'))}}
							{{Form::close()}}
							<h4>Recent Posts</h4>
							<ul class="recent-posts">
								@foreach (Post::recentPosts() as $recentpost)
								<li>{{link_to_action('PostsController@show', $recentpost->title,array($recentpost->slug))}}
									<h6><span class="date">Posted: {{ $recentpost->created_at->format('F jS Y @ h:i:s A')}}</span></h6></li>
								@endforeach
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
						<div class="col-md-7 pull-right">
							<div class="blog-post">
								<!-- Post Info -->
								<div class="post-info">
									{{{substr($post->user->first_name, 0, 1) . ". " . $post->user->last_name}}}
									<div class="post-date">
										<div class="date">{{ $post->created_at->format('F jS Y @ h:i:s A')}}</div>
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
									<h3>{{link_to_action('PostsController@show', $post->title, array($post->slug))}}</h3>
								</div>
								<div class="post-summary">
									<p>
										{{substr($post->renderBody(), 0, 150) . ' ...'}}
									</p>
								</div>
								<!-- End Post Title & Summary -->
								<div class="post-more">
									<a href="{{action('PostsController@show', array($post->slug))}}" class="btn btn-default"><span class="glyphicon glyphicon-book"></span> Continue Reading</a>
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
