@extends('layouts.master')

@section('content')
<!-- Page Title -->
<div class="section section-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Admin</h1>
			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
		    <!-- Sidebar -->
			<div class="col-sm-4 blog-sidebar">
				<h4>User Management</h4>
				<ul class="recent-posts">
					<li><a href="#">Lorem ipsum dolor sit amet</a></li>
					<li><a href="#">Sed sit amet metus sit</a></li>
					<li><a href="#">Nunc et diam volutpat tellus ultrices</a></li>
					<li><a href="#">Quisque sollicitudin cursus felis</a></li>
				<h4>Post Management</h4>
				<ul class="recent-posts">
					<li><a href="#">Lorem ipsum dolor sit amet</a></li>
					<li><a href="#">Sed sit amet metus sit</a></li>
					<li><a href="#">Nunc et diam volutpat tellus ultrices</a></li>
					<li><a href="#">Quisque sollicitudin cursus felis</a></li>
				</ul>
				<h4>Comment Management</h4>
				<ul class="blog-categories">
					<li><a href="#">Lorem ipsum</a></li>
					<li><a href="#">Sed sit amet metus</a></li>
					<li><a href="#">Nunc et diam </a></li>
					<li><a href="#">Quisque</a></li>
				</ul>
			</div>
			<!-- End Sidebar -->
			<!-- Dashboard -->
			<div class="col-sm-8 pull-right">
				<h4 class="text-center"><strong>Users</strong></h4>
				<table class="table table-hover table-striped table-responsive">
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Posts</th>
						<th>Edit</th>
					</tr>
					<tr>
						<td>First</td>
						<td>Last</td>
						<td>Email</td>
						<td><button>Post</button></td>
						<td><button>Edit</button></td>
					</tr>
				</table>
			</div>
			<!-- End Dashboard -->
		</div>
	</div>
</div>
@stop