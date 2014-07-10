        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
          <div class="container">
            <div class="menuextras">
          <div class="extras">
            <ul>
              <li>
                <div class="dropdown choose-country">
                  <a class="#" data-toggle="dropdown" href="#"><img src="/img/flags/us.png" alt="United States"> US</a>
                  <ul class="dropdown-menu" role="menu">
                    <li role="menuitem"><a href="#"><img src="/img/flags/gb.png" alt="Great Britain"> UK</a></li>
                    <li role="menuitem"><a href="#"><img src="/img/flags/de.png" alt="Germany"> DE</a></li>
                    <li role="menuitem"><a href="#"><img src="/img/flags/lu.png" alt="Luxembourg"> LU</a></li>
                    <li role="menuitem"><a href="#"><img src="/img/flags/fr.png" alt="France"> FR</a></li>
                  </ul>
                </div>
              </li>
              @if(!Auth::check())
                    <!-- <li>{{ HTML::link('users/register', 'Register') }}</li>    -->
                    <li>{{ link_to_action('HomeController@showLogin', 'Login') }}</li>
                    <li>{{ link_to_action('HomeController@showRegister', 'New User') }}</li>
                @else
                    <li>{{{Auth::user()->email}}}</li>
                    <li>{{ link_to_action('PostsController@create', 'Create Post') }}</li>
                    <li>{{ link_to_action('HomeController@logout', 'Log Out') }}</li>
                @endif
                </ul>
          </div>
            </div>
            <nav id="mainmenu" class="mainmenu">
          <ul>
            <li class="logo-wrapper"><a href="index.html"><img src="/img/aaitlogo.png" alt="AaIT Innovations, LLC"></a></li>
            <li>
              <a href="{{{ action('HomeController@showHomePage') }}}">Home</a>
            </li>
            <li>
              <a href="features.html">Services</a>
            </li>
            <li class="has-submenu active">
              <a href="#">Site Map</a>
              <div class="mainmenu-submenu">
                <div class="mainmenu-submenu-inner"> 
                  <div>
                    <h4>Homepage</h4>
                    <ul>
                      <li>{{link_to_action('HomeController@showHomePage', 'Home')}}</li>
                    </ul>
                    <h4>Services & Pricing</h4>
                    <ul>
                      <li><a href="page-services-3-columns.html">Services/Features (3 Columns)</a></li>
                      <li><a href="page-pricing.html">Pricing Table</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Our Work (Portfolio)</h4>
                    <ul>
                      <li>{{link_to_action('HomeController@showPortfolio', 'Portfolio')}}</li>
                    </ul>
                    <h4>General Pages</h4>
                    <ul>
                      <li>{{link_to_action('HomeController@showResume', 'About Us')}}</li>
                      <li><a href="page-contact-us.html">Contact Us</a></li>
                      <li><a href="page-faq.html">Frequently Asked Questions</a></li>
                      <li>{{link_to_action('HomeController@showAdmin', 'Admin Area')}}</li>
                      <li><a href="page-login.html">Login</a></li>
                      <li><a href="page-register.html">Register</a></li>
                      <li><a href="page-password-reset.html">Password Reset</a></li>
                      <li>{{link_to_action('HomeController@showTermsPrivacy', 'Terms & Privacy')}}</li>
                      <li><a href="page-coming-soon.html">Coming Soon</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Blog</h4>
                    <ul>
                      <li>{{link_to_action('PostsController@index', 'Blog')}}</li>
                      <li><a href="page-news.html">Latest & Featured News</a></li>
                    </ul>
                  </div>
                </div><!-- /mainmenu-submenu-inner -->
              </div><!-- /mainmenu-submenu -->
            </li>
            <li>{{link_to_action('HomeController@showResume', 'About Us')}}</li>
          </ul>
        </nav>
      </div>
    </div>