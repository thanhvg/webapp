<!--Dia Hodgins created this navbar with search bar functionality
		Sarah Ferguson made navbar collapsible, added drop down for contacts, and also added link for login modal-->
<nav class = "navbar-inverse nav navbar-fixed-top">
  <div class = "container- fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			<a class="navbar-brand" href="index.php">Travel Experts</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
  	 <ul class="nav navbar-nav">
  			<li><a href="packages.php">Vacation Packages</a></li>
  		  <li><a href="registration.php">Register</a></li>
  		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="contact.php">Contact<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="contact.php?city=Calgary">Calgary</a></li>
						<li><a href="contact.php?city=Okotoks">Okotoks</a></li>
					</ul>
				</li>
  			<!-- <li><a href="aboutus.php">About Us</a></li>-->
  	</ul>
  	<ul class="nav navbar-nav navbar-right">
      <?php if (!$isLogged) {?>
        <li><a id="login" href="#destination"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php } else { ?>
        <li><a id="login" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
      <?php } ?>
  	</ul>

  			  <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>

  	<form class="navbar-form navbar-left" role="search">
  			<div class="form-group">
  			     <input type="text" class="form-control" placeholder="Search">
  			</div>
  			<button type="submit" class="btn btn-default">Submit</button>
  	</form>
	</div>
  </div>
</nav>
<?php include("loginmodal.php"); ?>

<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->
