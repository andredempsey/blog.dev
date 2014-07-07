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
					<div class="single-post-title">
						<h3>{{{ $post->title }}}</h3>
						<h5>Author: {{{ $post->user->email }}}</h3>
					</div>
					<div class="single-post-info">
						<i class="glyphicon glyphicon-time"></i>{{{ $post->created_at->format('l, F jS Y @ h:i:s A')}}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
					</div>
					<div class="single-post-image">
						<img src="/img/blog-large.jpg" alt="Post Title">
					</div>
					<div class="single-post-content">
						<p>{{ $post->body }}
						@if(Auth::user()->id == $post->user_id)
						<div class="pull-right">{{link_to_action('PostsController@edit', 'edit', array($post->id))}}</div>
						
						{{ Form::model($post, array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
							{{Form::submit('Delete', array('class' => 'btn btn-danger pull-right'))}}
						{{Form::close()}}
						</p>
						@endif
					</div>
					<!-- Comments -->
					<div class="post-coments">
						<h4>Comments (53)</h4>
						<ul class="post-comments">
							<li>
								<div class="comment-wrapper">
									<div class="comment-author"><img src="/img/user1.jpg" alt="User Name"> User Name</div>
									<p>
										Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat massa ornare vitae. Ut fermentum justo vel venenatis eleifend. Fusce id magna eros. Interdum et malesuada fames ac ante ipsum primis in faucibus.
									</p>
									<!-- Comment Controls -->
									<div class="comment-actions">
										<span class="comment-date">June 10th, 2013 3:16 pm</span>
										<a href="#" data-toggle="tooltip" data-original-title="Vote Up" class="show-tooltip"><i class="glyphicon glyphicon-thumbs-up"></i></a>
										<a href="#" data-toggle="tooltip" data-original-title="Vote Down" class="show-tooltip"><i class="glyphicon glyphicon-thumbs-down"></i></a>
										<span class="label label-success">+8</span>
										<a href="#" class="btn btn-micro btn-grey comment-reply-btn"><i class="glyphicon glyphicon-share-alt"></i> Reply</a>
									</div>
								</div>
							</li>
							<li>
								<ul>
									<li>
										<div class="comment-wrapper">
											<div class="comment-author"><img src="/img/user2.jpg" alt="User Name"> User Name</div>
											<p>
												Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna.
											</p>
											<!-- Comment Controls -->
											<div class="comment-actions">
												<span class="comment-date">June 10th, 2013 3:16 pm</span>
												<a href="#" data-toggle="tooltip" data-original-title="Vote Up" class="show-tooltip"><i class="glyphicon glyphicon-thumbs-up"></i></a>
												<a href="#" data-toggle="tooltip" data-original-title="Vote Down" class="show-tooltip"><i class="glyphicon glyphicon-thumbs-down"></i></a>
												<span class="label label-danger">-2</span>
												<a href="#" class="btn btn-micro btn-grey comment-reply-btn"><i class="glyphicon glyphicon-share-alt"></i> Reply</a>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div class="comment-wrapper">
									<div class="comment-author"><img src="/img/user5.jpg" alt="User Name"> User Name</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel magna lectus.
									</p>
									<!-- Comment Controls -->
									<div class="comment-actions">
										<span class="comment-date">June 10th, 2013 3:16 pm</span>
										<a href="#" data-toggle="tooltip" data-original-title="Vote Up" class="show-tooltip"><i class="glyphicon glyphicon-thumbs-up"></i></a>
										<a href="#" data-toggle="tooltip" data-original-title="Vote Down" class="show-tooltip"><i class="glyphicon glyphicon-thumbs-down"></i></a>
										<span class="label label-success">+8</span>
										<a href="#" class="btn btn-micro btn-grey comment-reply-btn"><i class="glyphicon glyphicon-share-alt"></i> Reply</a>
									</div>
								</div>
							</li>
						</ul>
						<!-- Pagination -->
						<div class="pagination-wrapper ">
							<ul class="pagination pagination-sm">
								<li class="disabled"><a href="#">Previous</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
						<!-- Comments Form -->
						<h4>Leave a Comment</h4>
						<div class="comment-form-wrapper">
							<form class="">
		        				<div class="form-group">
		        				 	<label for="comment-name"><i class="glyphicon glyphicon-user"></i> <b>Your name</b></label>
									<input class="form-control" id="comment-name" type="text" placeholder="">
								</div>
								<div class="form-group">
									<label for="comment-email"><i class="glyphicon glyphicon-envelope"></i> <b>Your Email</b></label>
									<input class="form-control" id="comment-email" type="text" placeholder="">
								</div>
								<div class="form-group">
									<label for="comment-message"><i class="glyphicon glyphicon-comment"></i> <b>Your Message</b></label>
									<textarea class="form-control" rows="5" id="comment-message"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-large pull-right">Send</button>
								</div>
								<div class="clearfix"></div>
		        			</form>
						</div>
						<!-- End Comment Form -->
					</div>
					<!-- End Comments -->
				</div>
			</div>
			<!-- End Blog Post -->
		</div>
	</div>
</div>
@stop
