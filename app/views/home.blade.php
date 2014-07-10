@extends('layouts.master')

@section('content')

<!-- Homepage Slider -->
<div class="homepage-slider">
	<div id="sequence">
		<ul class="sequence-canvas">
			<!-- Slide Intro -->
			<li class="bg4">
				<!-- Slide Title -->
				<h2 class="title">A@IT Innovations, LLC</h2>
				<!-- Slide Text -->
				<h3 class="subtitle">We work hard to bring you innovative solutions.</h3>
				<!-- Slide Image -->
				<img class="slide-img" src="img/homepage-slider/slide3.png" alt="Slide 3" />
			</li>
			<!-- End Slide 3 --><li class="bg1">
			<!-- Slide 1 -->
				<!-- Slide Title -->
				<h2 class="title">Responsive Solutions</h2>
				<!-- Slide Text -->
				<h3 class="subtitle">Ready to meet your consulting, web development, and/or training needs.</h3>
				<!-- Slide Image -->
				<img class="slide-img" src="img/homepage-slider/slide1.png" alt="Slide 1" />
			</li>
			<!-- End Slide 1 -->
			<!-- Slide 2 -->
			<li class="bg2">
				<!-- Slide Title -->
				<h2 class="title">Complete Solutions</h2>
				<!-- Slide Text -->
				<h3 class="subtitle">Cradle-to-Grave:  Streamline your processes, build automated solutions, and provide comprehensive training.</h3>
				<!-- Slide Image -->
				<img class="slide-img" src="img/homepage-slider/slide2.png" alt="Slide 2" />
			</li>
			<!-- End Slide 2 -->
			<!-- Slide 3 -->
			<li class="bg3">
				<!-- Slide Title -->
				<h2 class="title">Flexible Solutions</h2>
				<!-- Slide Text -->
				<h3 class="subtitle">Your needs change ... we quickly adapt with tailored solutions.</h3>
				<!-- Slide Image -->
				<img class="slide-img" src="img/homepage-slider/slide3.png" alt="Slide 3" />
			</li>
			<!-- End Slide 3 -->
		</ul>
		<div class="sequence-pagination-wrapper">
			<ul class="sequence-pagination">
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Homepage Slider -->

<!-- Services -->
<div class="section">
    <div class="container">
    	<div class="row">
    		<div class="col-md-4 col-sm-6">
    			<div class="service-wrapper">
        			<img src="img/service-icon/diamond.png" alt="Service 1">
        			<h3>Consulting Services</h3>
        			<p>Innovative problem solving, process mapping/improvement, and project management.</p>
        			<a href="#" class="btn">Read more</a>
        		</div>
    		</div>
    		<div class="col-md-4 col-sm-6">
    			<div class="service-wrapper">
        			<img src="img/service-icon/ruler.png" alt="Service 2">
        			<h3>Web Development</h3>
        			<p>State-of-the-art business solutions in HTML/CSS, Bootstrap, PHP, Laravel, JavaScript, JQuery, and other technologies.</p>
        			<a href="#" class="btn">Read more</a>
        		</div>
    		</div>
    		<div class="col-md-4 col-sm-6">
    			<div class="service-wrapper">
        			<img src="img/service-icon/chat.png" alt="Service 3">
        			<h3>Training</h3>
        			<p>Comprehensive MS Office, decision analysis, asset management, and system dynamics training.</p>
        			<a href="#" class="btn">Read more</a>
        		</div>
    		</div>
    	</div>
    </div>
</div>
<!-- End Services -->

<!-- Team -->
<div class="section">
	<div class="container">
		<h2>Our Team</h2>
		<div class="row">
			<!-- Team Member -->
			<div class="testimonial col-md-4 col-sm-6">
				<!-- Author Photo -->
				<div class="author-photo">
					<img src="img/Andre.jpg" alt="Andre">
				</div>
				<div class="testimonial-bubble">
					<blockquote>
						<!-- Quote -->
						<p class="quote">
                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut."
                		</p>
                		<!-- Author Info -->
                		<cite class="author-info">
                			- Andre Dempsey,<br>Founder, <a href="mailto:aait-innovations@outlook.com">AaIT Innovations, LLC</a>
                		</cite>
                	</blockquote>
                	<div class="sprite arrow-speech-bubble"></div>
                </div>
            </div>
            <!-- End Team Member -->

		</div>
	</div>
</div>
<!-- End Team -->


<!-- Pricing Table -->
<div class="section">
	<div class="container">
		<h2>Pricing</h2>
    	<div class="row">
    		<!-- Pricing Plans Wrapper -->
    		<div class="pricing-wrapper col-md-12">
				<!-- Pricing Plan -->
				<div class="pricing-plan">
					<!-- Pricing Plan Ribbon -->
					<h2 class="pricing-plan-title">Hourly Rate</h2>
					<p class="pricing-plan-price">$50<span>/hr</span></p>
					<!-- Pricing Plan Features -->
					<ul class="pricing-plan-features">
						<li>Consulting</li>
						<li>Web Development</li>
						<li>Training</li>
					</ul>
					<a href="index.html" class="btn">Order Now</a>
				</div>
				<!-- End Pricing Plan -->
			    <div class="pricing-plan">
					<div class="ribbon-wrapper">
						<div class="price-ribbon ribbon-red">Popular</div>
					</div>
					<h2 class="pricing-plan-title">Single Web Page Site</h2>
					<p class="pricing-plan-price">$229<span> flat rate</span></p>
						<ul class="pricing-plan-features">
							<li><strong>Includes hosting</strong> for 1 year</li>
							<li>(up to 5 hours effort)</li>
							<li>add'l billed at hourly rate</li>
						</ul>
					<a href="index.html" class="btn">Order Now</a>
			    </div>
			    <!-- Promoted Pricing Plan -->
			    <div class="pricing-plan pricing-plan-promote">
						<h2 class="pricing-plan-title">Full Service Web Site</h2>
						<p class="pricing-plan-price">$99<span>/mo</span></p>
						<ul class="pricing-plan-features">
							<li><strong>Unlimited</strong> users</li>
							<li><strong>Unlimited</strong> projects</li>
							<li><strong>100GB</strong> storage</li>
						</ul>
					<a href="index.html" class="btn">Order Now</a>
			    </div>
			    <div class="pricing-plan">
			    	<!-- Pricing Plan Ribbon -->
					<div class="ribbon-wrapper">
						<div class="price-ribbon ribbon-green">New</div>
					</div>
					<h2 class="pricing-plan-title">Mega</h2>
					<p class="pricing-plan-price">$199<span>/mo</span></p>
						<ul class="pricing-plan-features">
							<li><strong>Unlimited</strong> users</li>
							<li><strong>Unlimited</strong> projects</li>
							<li><strong>100GB</strong> storage</li>
						</ul>
					<a href="index.html" class="btn">Order Now</a>
			    </div>
    		</div>
    		<!-- End Pricing Plans Wrapper -->
    	</div>
	</div>
</div>
<!-- End Pricing Table -->
@stop
