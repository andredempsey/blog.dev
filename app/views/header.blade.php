
<img class="img-circle" id="andre" src="/img/Andre.jpg">
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
        <a class="navbar-brand" href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="mailto:aait-innovations@outlook.com?Subject=Request%20Information" target="_top">
                Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#Project1">Project 1</a></li>
                <li><a href="#Project2">Project 2</a></li>
                <li><a href="#Project3">Project 3</a></li>
                <li><a href="#Project4">Project 4</a></li>
                <li class="divider">--------</li>
                <li><a href="#OtherProjects">Other Projects</a></li>
              </ul>
            </li>
            <li><a href="/blog.html" target="ext">Blog</a></li>
            <li><a href="{{{ action('HomeController@showResume') }}}" target="ext">About</a></li>
          </ul>
          <form action="/search" class="main-search" id="main-search" role="search">
          <div class="main-search__content">
          <input class="main-search__input" name="q" placeholder="Search..." value="">
          <input class="main-search__button g-search" type="submit" value="Search">
          </div>
          </form>
        </div>
    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->