<?php

require_once('header.html') 

?> 
  <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="fill" style="background-image:url('./img/house1.jpg');"></div>
            <div class="carousel-caption">
              <h1>Welcome to St Julian Center</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('./img/restaraunt1.jpg');"></div>
            <div class="carousel-caption">
              <h1>Our state of the art guest house</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('./img/garden2.jpg');"></div>
            <div class="carousel-caption">
              <h1>Spend time with God in this retreat</h1>
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

    <div class="section">

      <div class="container">

<!--        <div class="row">
          <div class="col-lg-4 col-md-4">
            <h3><i class="fa fa-check-circle"></i> Bootstrap 3 Built</h3>
            <p>The 'Modern Business' website template by <a href="http://startbootstrap.com">Start Bootstrap</a> is built with <a href="http://getbootstrap.com">Bootstrap 3</a>. Make sure you're up to date with latest Bootstrap documentation!</p>
          </div>
          <div class="col-lg-4 col-md-4">
            <h3><i class="fa fa-pencil"></i> Ready to Style &amp; Edit</h3>
            <p>You're ready to go with this pre-built page structure, now all you need to do is add your own custom stylings! You can see some free themes over at <a href="http://bootswatch.com">Bootswatch</a>, or come up with your own using <a href="http://getbootstrap.com/customize/">the Bootstrap customizer</a>!</p>
          </div>
          <div class="col-lg-4 col-md-4">
            <h3><i class="fa fa-folder-open"></i> Many Page Options</h3>
            <p>This template features many common pages that you might see on a business website. Pages include: about, contact, portfolio variations, blog, pricing, FAQ, 404, services, and general multi-purpose pages.</p>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->

    <div class="section-colored text-center">

      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <h2>"Come unto me all who are weary and I will give you rest" - Mathew 11:28</h2>
            <p>Need to spend time away from all of life's commitments that keep you from enjoying God and His creation? Look no further</p>
            <hr>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section-colored -->
 <div class="container">

      <div class="row well">
        <div class="col-lg-10 col-md-10">
          <h4>Welcome the St Julian's Retreat Center!</h4>
          <p>Located in Limuru, St Julian's center comes with a serene environment on top of the many word class services offered. It is ideal for team building exercises, corporate conferences,prayer retreats and family outings. But don't take our word for it, come see for yourself!</p>
        </div>
        <div class="col-lg-2 col-md-2"style="padding-top: 33px;">
          <a class="btn btn-lg btn-primary pull-left" href="http://startbootstrap.com">Book now!</a>
        </div>
      </div><!-- /.row -->

    <div class="section">

      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>The Place we call home</h2>
            <hr>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="portfolio-item.html"><img class="img-responsive img-home-portfolio" src="./img/st_julians.jpg"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="portfolio-item.html"><img class="img-responsive img-home-portfolio" src="./img/st_julians2.jpg"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="portfolio-item.html"><img class="img-responsive img-home-portfolio" src="./img/st_julians3.jpg"></a>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->

    <div class="section-colored">

      <div class="container">

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h2>What we offer:</h2>
            <ul>
              <li>Delicious Meals</li>
              <li>Conference facilities</li>
              <li>Recreation activities</li>
              <li>Accomodation</li>
              <li>Chapel</li>
              <li>Nature Walk</li>
              <li>Serene Environment</li>
              <li>100% <strong>Christian</strong> Centered</li>
              <li>Prayer Grounds</li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <img class="img-responsive" src="http://placehold.it/700x450/ffffff/cccccc">
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section-colored -->

<?php
include('footer.html')
?>
