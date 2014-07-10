@extends('layouts.master')

@section('content')

<!-- Homepage Slider -->
<div class="homepage-slider">
	<div id="sequence">
		<ul class="sequence-canvas">
			<!-- Slide Intro -->
			<li class="bg4">
				<!-- Slide Title -->
				<h2 class="title">AaIT Innovations, LLC</h2>
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
                            "Hi! I look forward to serving your consulting, web development, and/or training needs.  Please be patient as we add new content (including samples of our work in the Portfolio section).  Send me an email if you have questions or would like help on your important project."
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

@stop
