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
			<div class="col-sm-5">
				<div class="basic-login">
					{{Form::model(array('action'=>'HomeController@doRegister', 'method' => 'POST', 'class' => 'form-signin', 'role' => 'form'))}}
						<div class="form-group">
							{{Form::label('email', 'Email', array('class' => 'icon-user'))}}
							{{Form::text('email', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('password', 'Password', array('class' => 'icon-lock'))}}
							<br>
							{{Form::password('password', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
        				 	{{Form::label('password2', 'Re-enter Password', array('class' => 'icon-lock'))}}
							<br>
							{{Form::password('password2', null, array('class' => 'form-control'))}}
						</div>
						{{Form::Submit('Register', array('class' => 'btn pull-right'))}}
						<div class="clearfix"></div>
						</div>
					{{Form::close()}}
				</div>
				<div class="clearfix"></div>
			<div class="col-sm-6 col-sm-offset-1 social-login">
				<p>You can use your Facebook or Twitter for registration</p>
				<div class="social-login-buttons">
					<a href="#" class="btn-facebook-login">Use Facebook</a>
					<a href="#" class="btn-twitter-login">Use Twitter</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop