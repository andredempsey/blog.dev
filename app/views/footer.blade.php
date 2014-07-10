      <!-- Footer -->
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
              <h3>Our Latest Work</h3>
              <div class="portfolio-item">
              <div class="portfolio-image">
                <a href="page-portfolio-item.html"><img src="/img/portfolio6.jpg" alt="Project Name"></a>
              </div>
            </div>
            </div>
            <div class="col-footer col-md-3 col-xs-6">
              <h3>Navigate</h3>
              <ul class="no-list-style footer-navigate-section">
                <li>{{link_to_action('PostsController@index', 'Blog')}}</li>
                <li>{{link_to_action('HomeController@showPortfolio', 'Portfolio')}}</li>
                <li>{{link_to_action('HomeController@showResume', 'About Us')}}</li>
              </ul>
            </div>
            
            <div class="col-footer col-md-4 col-xs-6">
              <h3>Contacts</h3>
              <p class="contact-us-details">
                  <b>Address:</b> Schertz, Texas, USA<br/>
                  <b>Phone:</b> (210) 508-4133<br/>
                  <b>Email:</b> <a href="mailto:aait-innovations@outlook.com">aait-innovations@outlook.com</a>
                </p>
            </div>
            <div class="col-footer col-md-2 col-xs-6">
              <h3>Stay Connected</h3>
              <ul class="footer-stay-connected no-list-style">
                <li><a href="#" class="facebook"></a></li>
                <li><a href="#" class="twitter"></a></li>
                <li><a href="#" class="googleplus"></a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="footer-copyright">&copy; {{date('Y')}} AaIT Innovations, LLC. All rights reserved.</div>
            </div>
          </div>
        </div>
      </div>