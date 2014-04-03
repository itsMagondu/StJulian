<?php

require_once('header.html') 

?> 
<?php 

define('WP_USE_THEMES', false);
require('blog/wordpress/wp-blog-header.php');

?>

<?php
require('blog/wordpress/wp-blog-header.php');
?>
    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">St. Julian's Blog<small> What new?</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Blog</li>
          </ol>
        </div>

      </div>
      
      <?php
      $posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
      foreach ($posts as $post) : setup_postdata( $post ); ?>
      <?php the_date(); echo "<br />"; ?>
      <?php the_title(); ?>    
      <?php the_excerpt(); ?> 
      <?php
      endforeach;
      ?>    
      <div class="row">

        <div class="col-md-1">
          <p><i class="fa fa-camera fa-4x"></i></p>
          <p>May 24, 2013</p>
        </div>
        <div class="col-md-5">
          <a href="blog-post.html"><img src="http://placehold.it/600x300" class="img-responsive"></a>
        </div>
        <div class="col-md-6">
          <h3><a href="blog.php">Bishop Ranji pays us a visit</a></h3>
          <p>by <a href="#">Naomi K.</a></p>
          <p>This is a very basic starter template for a blog homepage. It makes use of Font Awesome icons that are built into the 'Modern Business' template, and it makes use of the Bootstrap 3 pager at the bottom of the page.</p>
          <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
        </div>

      </div>

      <hr>

      <div class="row">

        <div class="col-md-1">
          <p><i class="fa fa-film fa-4x"></i></p>
          <p>May 24, 2013</p>
        </div>
        <div class="col-md-5">
          <a href="blog-post.html"><img src="http://placehold.it/600x300" class="img-responsive"></a>
        </div>
        <div class="col-md-6">
          <h3><a href="blog.php">December Offer! 50% off on advance bookings</a></h3>
          <p>by <a href="#">Admin</a></p>
          <p>This is a very basic starter template for a blog homepage. It makes use of Font Awesome icons that are built into the 'Modern Business' template, and it makes use of the Bootstrap 3 pager at the bottom of the page.</p>
          <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
        </div>
      </div>

      <hr>

      <div class="row">

        <div class="col-md-1">
          <p><i class="fa fa-file-text fa-4x"></i></p>
          <p>May 24, 2013</p>
        </div>
        <div class="col-md-5">
          <a href="blog-post.html"><img src="http://placehold.it/600x300" class="img-responsive"></a>
        </div>
        <div class="col-md-6">
          <h3><a href="blog.php">We now accept payment over M-Pesa</a></h3>
          <p>by <a href="#">Naomi K.</a></p>
          <p>This is a very basic starter template for a blog homepage. It makes use of Font Awesome icons that are built into the 'Modern Business' template, and it makes use of the Bootstrap 3 pager at the bottom of the page.</p>
          <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
        </div>
      </div>

      <hr>

      <div class="row">

        <ul class="pager">
          <li class="previous"><a href="#">&larr; Older</a></li>
          <li class="next"><a href="#">Newer &rarr;</a></li>
        </ul>

      </div>

    </div><!-- /.container -->

<?php

require_once('footer.html') 

?> 
