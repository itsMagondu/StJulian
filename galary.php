<?php

require_once('header.html') 

?> 

<div class="container">
    <h3>Enjoy this pictures of St. Julian's Centre.</h3>
    <br>
    <!-- The container for the list of example images -->
    <div id="links">
    <a href="img/shoot/Chapel Altar 1.jpg" title="St Julians Chapel, The Alter" data-gallery>
        <img src="images/thumbnails/banana.jpg" alt="chapel">
    </a>
    <a href="img/shoot/Chapel Altar 2.jpg" title="St. Julian's Chapel, The Alter" data-gallery>
        <img src="images/thumbnails/apple.jpg" alt="chapel">
    </a>
    <a href="img/shoot/Chapel Inside.jpg" title="St. Julian's Chapel, Inside view" data-gallery>
        <img src="images/thumbnails/orange.jpg" alt="chapel">
    </a>
     <a href="img/shoot/Chapel Outside.jpg" title="St Julians Chapel, Outside View" data-gallery>
        <img src="images/thumbnails/banana.jpg" alt="chapel">
    </a>
    <a href="img/shoot/Chapel View 1.jpg" title="St. Julian's Chapel, artistic view" data-gallery>
        <img src="images/thumbnails/apple.jpg" alt="chapel">
    </a>
    <a href="img/shoot/Chapel View 2.jpg" title="St. Julian's Chapel, another artistic view" data-gallery>
        <img src="images/thumbnails/orange.jpg" alt="chapel">
    </a>
</div>
    <br>
</div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<!--<div id="blueimp-gallery-carouse" class="blueimp-gallery blueimp-gallery-carousel">-->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.html')
?>
