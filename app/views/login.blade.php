@extends('layouts.master')
@section('content')
<!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Login</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							{{Form::open(array('action'=>'HomeController@doLogin', 'class' => 'form-signin', 'role' => 'form'))}}
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
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
									<a href="page-password-reset.html" class="forgot-password">Forgot password?</a>
									{{Form::Submit('Login', array('class' => 'btn pull-right'))}}
									<div class="clearfix"></div>
								</div>
							{{Form::close()}}
							
						</div>
					</div>
					<div class="col-sm-7 social-login">
						<p>Or login with your Facebook or Twitter</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Login with Facebook</a>
							<a href="#" class="btn-twitter-login">Login with Twitter</a>
						</div>
						<div class="clearfix"></div>
						<div class="not-member">
							<p>Not a member? <a href="page-register.html">Register here</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

</div>
@stop
