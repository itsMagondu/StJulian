<?php

require_once('header.html') 

?> 


    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contact Us <small>We'd Love to Hear From You!</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
			<!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.ke/maps/ms?msa=0&amp;msid=215748702601980948760.0004efca5bd4da78bd158&amp;hl=en&amp;ie=UTF8&amp;ll=-1.181462,36.70122&amp;spn=0,0&amp;t=m&amp;iwloc=0004efca5bf75f433cca3&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.co.ke/maps/ms?msa=0&amp;msid=215748702601980948760.0004efca5bd4da78bd158&amp;hl=en&amp;ie=UTF8&amp;ll=-1.181462,36.70122&amp;spn=0,0&amp;t=m&amp;iwloc=0004efca5bf75f433cca3&amp;source=embed" style="color:#0000FF;text-align:left">St Julian's Center</a> in a larger map</small>-->
		  <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.ke/maps/ms?msa=0&amp;msid=215748702601980948760.0004efca5bd4da78bd158&amp;hl=en&amp;ie=UTF8&amp;ll=-1.181462,36.70122&amp;spn=0,0&amp;t=m&amp;iwloc=0004efca5bf75f433cca3&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.co.ke/maps/ms?msa=0&amp;msid=215748702601980948760.0004efca5bd4da78bd158&amp;hl=en&amp;ie=UTF8&amp;ll=-1.181462,36.70122&amp;spn=0,0&amp;t=m&amp;iwloc=0004efca5bf75f433cca3&amp;source=embed" style="color:#0000FF;text-align:left">St Julian's Center</a> in a larger map</small>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>We here at St. Julians center would like to hear from you. We appreciate feedback and inquires. Help us serve you better.</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>ACK St Julian's Center</h3>
          <h4>The retreat center</h4>
          <p>
            Limuru Area (just off the Limuru Highway)<br>
            P.O. Box 574, Village Market, KENYA, 00621.<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">Phone</abbr>: +254-733-785202  || +254-(0)20-3001660</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">Email</abbr>: <a href="mailto:feedback@stjulianscenter.co.ke">feedback@stjulianscenter.co.ke</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">Hours</abbr>: Monday - Sunday: 9:00 AM to 5:00 PM</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/AckStJuliansCentreLimuru" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php

require_once('footer.html') 

?> 
