<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="bootstrap\js\bootstrap.min.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
	 <script>
    $('#modal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
  </script>
  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>

	<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style="width: 100%; top: 0;">
  <div class="container">
    <a class="navbar-brand" href="frontpage.php" style="">
          <img src="images\Logomaker-Education-20191226.png" alt="" style="width: 90px; height: 90px;">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
    	<?php 
		if(isset($_SESSION['login_status']) && $_SESSION['login_status']==true)
		{	$user_name=ucwords($_SESSION['name']);
			?>
			<li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
			<li class="nav-item">
          	<a class="nav-link" href="myprofile.php"><?php echo $user_name;?></a>	
      		</li>
      		<?php
      		if($_SESSION['image']==null)
      		{?>
      		<li class="nav-item"><img src="images\34AD2.jpg" style="width: 50px; height: 50px; border-radius: 50%;"></li>
      		<?php 
      		}
      		else
      		{
      			?><li class="nav-item"><img src="images\<?php echo $_SESSION['image'];?>" style="width: 50px; height: 50px; border-radius: 50%;"></li><?php
      		}?>
		<?php
		}
		else
		{?>
		<li class="nav-item">
          <a class="nav-link" href="sign_in.php" data-toggle="modal" data-target="#exampleModal">Sign In</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="log_in.php" data-toggle="modal" data-target="#exampleModal1">Log In</a>
        </li>
		<?php
		}
    	?>
      </ul>
    </div>
  </div>
</nav>
</head>