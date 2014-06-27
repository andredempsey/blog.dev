@extends('layouts.master')

@section('contentPortfolio')
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="/img/wva.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Project Title Goes Here</h1>
          <p>Project summary description goes here.</p>
          <p><a class="btn btn-large btn-primary" href="#Project1">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/riverwalk.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Project Title Goes Here</h1>
          <p>Project summary description goes here.</p>
          <p><a class="btn btn-large btn-primary" href="#Project2">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/fountain.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Project Title Goes Here</h1>
          <p>Project summary description goes here.</p>
          <p><a class="btn btn-large btn-primary" href="#Project3">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/church.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Project Title Goes Here</h1>
          <p>Project summary description goes here.</p>
          <p><a class="btn btn-large btn-primary" href="#Project4">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/tower.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Project Title Goes Here</h1>
          <p>Project summary description goes here.</p>
          <p><a class="btn btn-large btn-primary" href="#Project5">Learn more</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->
<div id="summaryDescription">
<h3>Summary</h3><p>Brief summary type of work <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, soluta, est saepe esse porro mollitia minima facere odit molestias asperiores amet non ut incidunt quos tempore voluptatibus commodi dolor pariatur.</span>
<span>Necessitatibus, porro, aut dolorem nisi libero excepturi ipsum consectetur repudiandae dicta veritatis voluptas tempore repellat eaque optio cum nesciunt repellendus minima earum quo vitae obcaecati unde recusandae perferendis temporibus reprehenderit!</span>
<span>Quaerat, itaque provident vitae ad sit magnam inventore maxime nemo accusantium rerum. Optio adipisci blanditiis totam ipsa libero neque mollitia nesciunt quos provident magni. Officiis, quas ea harum deserunt expedita!</span>
<span>Laboriosam, velit, voluptates hic dolorem perspiciatis harum voluptate explicabo quia delectus eaque error vitae animi molestiae doloribus quasi illum commodi ullam tempora ipsam earum ea blanditiis voluptatibus magnam voluptatem architecto.</span></p>
</div>
<hr>
@stop