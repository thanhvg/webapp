<?php
//include("loginprocess.php");
include_once("logincheck.inc.php");
$title = "Travel Experts";
include("header.php");
include("navbar.php");

?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/dania_beach_Florida.JPG" alt="Image">
            <div class="carousel-caption">
              <!-- <h3 style="color:black;">All-inclusive Beach Vacation</h3>
              <p style="color:black;">Take a break from your busy life with our all-inclusive beach vacation package</p> -->
            </div>
          </div>

          <div class="item">
            <img src="img/Caracas_Venezuela2.jpg" alt="Image">
            <div class="carousel-caption">
              <!-- <h3 style="color:black;"><strong>Venezuela Special</strong></h3>
              <p style="color:black;"><strong>Our Venezuela trip is 20% off until June 25th. Book now before we sell out!</strong></p> -->
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1>About the Travel Experts</h1>
          <h4><strong>We specialize in finding the best travel solutions for you</strong></h4>
          <p>Lorem ipsum dolor sit amet, dui augue ut lectus enim dapibus wisi, amet neque quis sodales lectus, et vel sed pretium ac ut. Velit elit sunt imperdiet, pulvinar pede tellus vestibulum eget, eros ut. A ligula nec, diam pellentesque duis non et. Scelerisque mattis. Id morbi suspendisse ligula tristique enim, elit sollicitudin. Lorem ipsum dolor sit amet, dui augue ut lectus enim dapibus wisi, amet neque quis sodales lectus, et vel sed pretium ac ut. Velit elit sunt imperdiet, pulvinar pede tellus vestibulum eget, eros ut. A ligula nec, diam pellentesque duis non et. Scelerisque mattis. Id morbi suspendisse ligula tristique enim, elit sollicitudin.</p>
          <p>Lorem ipsum dolor sit amet, dui augue ut lectus enim dapibus wisi, amet neque quis sodales lectus, et vel sed pretium ac ut. Velit elit sunt imperdiet, pulvinar pede tellus vestibulum eget, eros ut. A ligula nec, diam pellentesque duis non et. Scelerisque mattis. Id morbi suspendisse ligula tristique enim, elit sollicitudin. Lorem ipsum dolor sit amet, dui augue ut lectus enim dapibus wisi, amet neque quis sodales lectus, et vel sed pretium ac ut. Velit elit sunt imperdiet, pulvinar pede tellus vestibulum eget, eros ut. A ligula nec, diam pellentesque duis non et. Scelerisque mattis. Id morbi suspendisse ligula tristique enim, elit sollicitudin.</p>
        </div>
        <div class="col-sm-4">
          <img src="img/globe_resize.jpg" alt="Globe" class="img-responsive"> <!-- Image taken from http://www.publicdomainpictures.net/view-image.php?image=127834&picture=globe -->
        </div>
    </div>
    </div>

<?php include("footer.php");  ?>
