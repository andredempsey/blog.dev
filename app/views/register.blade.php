@extends('layouts.master')

@section('content')
<!-- Page Title -->
<div class="section section-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Register</h1>
			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			@foreach($errors->all() as $error)
	            <li class="danger">{{ ($error=='The password2 and password must match.')?'The passwords do not match':$error}}</li>
	        @endforeach
			<div class="col-sm-5">
				<div class="basic-login">
					{{Form::open(array('action'=>'HomeController@doRegister', 'class' => 'form-signin', 'role' => 'form'))}}
						<div class="form-group">
							{{Form::label('firstname', 'First Name', array('class' => 'icon-user'))}}
							{{Form::text('firstname', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('lastname', 'Last Name', array('class' => 'icon-user'))}}
							{{Form::text('lastname', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('email', 'Email', array('class' => 'icon-user'))}}
							{{Form::text('email', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('password', 'Password (min 6 chars)', array('class' => 'icon-lock'))}}
							<br>
							{{Form::password('password', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('password2', 'Re-enter Password', array('class' => 'icon-lock'))}}
							<br>
							{{Form::password('password2', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('newsletter', 'Subscribe to our newsletter?', array('class' => 'icon-user'))}}
							{{Form::checkbox('newsletter', null, array('class' => 'form-control'))}}
						</div>
						{{Form::Submit('Register', array('class' => 'btn pull-right'))}}
						<div class="clearfix"></div>
					{{Form::close()}}
				</div>
			</div>
			<!-- <div class="col-sm-6 col-sm-offset-1 social-login">
				<p>You can use your Facebook or Twitter for registration</p>
				<div class="social-login-buttons">
					<a href="#" class="btn-facebook-login">Use Facebook</a>
					<a href="#" class="btn-twitter-login">Use Twitter</a>
				</div>
			</div> -->
		</div>
	</div>
</div>
@stop