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
				<h4>Post Management</h4>
				<h4>Comment Management</h4>
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
						<th>Remove</th>
					</tr>
					<tr>
						@foreach ($users as $user) 
						<td>{{{$user->first_name}}}</td>
						<td>{{{$user->last_name}}}</td>
						<td>{{{$user->email}}}</td>
						<td><button>View Posts</button></td>
						<td><button>Remove</button></td>
					</tr>
					@endforeach
				</table>
				<div class="text-center">{{ $users->links() }}</div>
			</div>
			<!-- End Dashboard -->
		</div>
	</div>
</div>
@stop