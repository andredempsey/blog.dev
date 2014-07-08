@extends('layouts.master')

@section('content')

<!-- Page Title -->
<div class="section section-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Portfolio Item Description</h1>
			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<!-- Image Column -->
			<div class="col-sm-6">
				<div class="portfolio-item">
					<div class="portfolio-image">
						<a href="#"><img src="img/portfolio2.jpg" alt="Project Name"></a>
					</div>
				</div>
			</div>
			<!-- End Image Column -->
			<!-- Project Info Column -->
			<div class="portfolio-item-description col-sm-6">
				<h3>Project Description</h3>
				<p>
					Mauris auctor blandit neque eu cursus. Nunc vel commodo dui, sed tempus mi. Fusce eleifend, orci ut elementum porta, mauris leo porta purus.
				</p>
				<p>
					Etiam aliquet tempor est nec pharetra. Etiam interdum tincidunt orci vitae elementum. Donec sollicitudin quis risus sit amet lobortis. Fusce sed tincidunt nisl.
				</p>
				<ul class="no-list-style">
					<li><b>Client:</b> Some Client LTD</li>
					<li><b>Date:</b> 01, September 2012 - 23, February 2013</li>
					<li><b>Technologies:</b> HTML5, CSS3, jQuery, PHP, MySQL</li>
					<li class="portfolio-visit-btn"><a href="#" class="btn">Visit Website</a></li>
				</ul>
			</div>
			<!-- End Project Info Column -->
		</div>
		<!-- Related Projects -->
		<h3>Related Projects</h3>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="portfolio-item">
					<div class="portfolio-image">
						<a href="#"><img src="img/portfolio3.jpg" alt="Project Name"></a>
					</div>
					<div class="portfolio-info-fade">
						<ul>
							<li class="portfolio-project-name">Project Name</li>
							<li>Website design & Development</li>
							<li>Client: Some Client LTD</li>
							<li class="read-more"><a href="#" class="btn">Read more</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="portfolio-item">
					<div class="portfolio-image">
						<a href="#"><img src="img/portfolio4.jpg" alt="Project Name"></a>
					</div>
					<div class="portfolio-info-fade">
						<ul>
							<li class="portfolio-project-name">Project Name</li>
							<li>Website design & Development</li>
							<li>Client: Some Client LTD</li>
							<li class="read-more"><a href="#" class="btn">Read more</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="portfolio-item">
					<div class="portfolio-image">
						<a href="#"><img src="img/portfolio6.jpg" alt="Project Name"></a>
					</div>
					<div class="portfolio-info-fade">
						<ul>
							<li class="portfolio-project-name">Project Name</li>
							<li>Website design & Development</li>
							<li>Client: Some Client LTD</li>
							<li class="read-more"><a href="#" class="btn">Read more</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Related Projects -->
	</div>
</div>
@stop