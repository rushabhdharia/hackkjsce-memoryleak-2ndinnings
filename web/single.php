<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Blogname a Blogging Category Flat Bootstarp  Responsive Web Template | Home :: w3layouts</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Blogname Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!--end slider -->
		<!--script-->
		<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->

</head>
<body>
<!---strat-banner---->
<div class="banner">				
	 <div class="header">  
		  <div class="container">
			  <div class="logo">
					<a href="index.html"> <img src="images/logo.png" title="soup" /></a>
			 </div>
			 <!---start-top-nav---->
			 <div class="top-menu">
				  <span class="menu"> </span> 
				   <ul>
						<li class="active"><a href="index.html">HOME</a></li>						
						<li><a href="contact.html">CONTACT</a></li>	
						<li><a href="terms.html">TERMS</a></li>						
						<div class="clearfix"> </div>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
				<!---//End-top-nav---->					
		 </div>
	 </div>
	 <div class="container">
		 <div class="banner-head">
			 <h1>Lorem ipsum dolor sit amet</h1>
			 <h2>cliquam tincidunt mauris</h2>
		 </div>
		 <div class="banner-links">
			 <ul>
				 <li class="active"><a href="#">LOREM IPSUM</a></li>
				 <li><a href="#">DOLAR SITE AMET</a></li>
				 <li><a href="#">MORBI IN SEM</a></li>
				 <div class="clearfix"></div>
			 </ul>
		 </div>
	 </div>
</div>
<!---//End-banner---->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">
					 
					 <div class="content-grid-head">
						 <?php
						 include('config.php');
						 $id1 = $_GET['id'];
						  $sql = "SELECT * FROM blogs where user_id=$id1";
						  $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                     {

						 
						 echo '<h3>POST OF THE DAY</h3>';
						 echo '<h4>July 24, 2014,Posted by: <a href="#">Admin</a></h4>';
						 echo '<div class="clearfix"></div>';
					 	 echo '</div>';
					 	 echo '<div class="content-grid-single">';
						 echo '<h3>';
						 echo $row['title'];
						 echo '</h3>';
						 // <span>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</span>
						 // <img class="single-pic" src="images/c1.jpg" alt=""/>
						 echo '<p id="text">';
						 echo  $row['text_blog'];
						 echo '</p>';
						 echo '<a class="bttn" id="bttnva">';
						echo 'text-speech</a>';
					// echo'</div>';
				 // echo '</div>';
					// 	
					}
						 
						?>
						  <div class="content-form">
							 <h3>Leave a comment</h3>
							 <form>
							 <input type="text" placeholder="Name" required/>
							 <input type="text" placeholder="E-mail" required/>
							 <input type="text" placeholder="Phone" required/>
							 <textarea placeholder="Message"></textarea>
							 <input type="submit" value="SEND"/>
							 </form>
						 </div>
						 <div class="comments">
							 <h3>Comment</h3>
							 <div class="comment-grid">
								 <img src="images/pic.png" alt=""/>
								 <div class="comment-info">
								 <h4>MARK JOHNSON</h4>
								 <p>Vivamus congue turpis in laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper.</p>
								 <h5>On April 14, 2014, 18:01</h5>
								 <a href="#">Reply</a>
								 </div>
								 <div class="clearfix"></div>
							 </div>
							 
							 <div class="comment-grid">
								 <img src="images/pic.png" alt=""/>
								 <div class="comment-info">
								 <h4>MARK JOHNSON</h4>
								 <p>Vivamus congue turpis in laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper.</p>
								 <h5>On April 14, 2014, 18:01</h5>
								 <a href="#">Reply</a>
								 </div>
								 <div class="clearfix"></div>
							 </div>	
							 <div class="pages">
									<ul>
									 <li class="active"><a href="#">1</a></li>
									 <li><a href="#">2</a></li>
									 <li><a href="#">3</a></li>
									 <li><a href="#">4</a></li>
									 <li><a href="#">5</a></li>
									 <li><a href="#">6</a></li>
									 <li><a href="#">Previous</a></li>
									 <li><a href="#">Next</a></li>
									</ul>
							 </div>	
						</div>
					  </div>
					 
				 </div>			 			 
			 </div>
			 
			 <div class="col-md-4 content-main-right">
				 <div class="search">
						 <h3>SEARCH HERE</h3>
						<form>
							<input type="text" value="" onfocus="this.value=''" onblur="this.value=''">
							<input type="submit" value="">
						</form>
				 </div>
				 <div class="categories">
					 <h3>CATEGORIES</h3>
					 <li class="active"><a href="#">Donec quis dui at dolor tempor</a></li>
					 <li><a href="#">Vestibulum commodo felis quis tort</a></li>
					 <li><a href="#">Fusce pellentesque suscipit</a></li>
				 </div>
				 <div class="archives">
					 <h3>ARCHIVES</h3>
					 <li class="active"><a href="#">July 2014</a></li>
					 <li><a href="#">June 2014</a></li>
					 <li><a href="#">May 2014</a></li>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--fotter-->
<div class="fotter">
	 <div class="container">
		 <div class="col-md-4 fotter-info">
			 <h3>INTEGER VITAE LIBERO</h3>
			 <p>Raesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. </p>
			 <p>Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultrices nulla quis nibh. Quisque a lectus. </p>
		 </div>
		 <div class="col-md-4 fotter-list">
			 <h3>VESTIBULUM COMMO</h3>
			 <ul>
			 <li><a href="#">Ut alliquam solicitudin</a></li>
			 <li><a href="#">Neque id cursus faucibus</a></li>
			 <li><a href="#">Raesent dapibus neque id cursus</a></li>
			 </ul>
		 </div>
		 <div class="col-md-4 fotter-media">
				<h3>FOLLOW US ON....</h3>
				 <div class="social-icons">
				 <a href="#"><span class="fb"> </span></a>
				 <a href="#"><span class="twt"> </span></a>
				 <a href="#"><span class="in"> </span></a>				 			 
			    </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---fotter/-->
<div class="copywrite">
	 <div class="container">
	 <p>Copyrights &copy; 2015 Blogging All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
</div>
</div>
<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
<script type="text/javascript">

$( "#bttnva" ).click(function() {
  alert( "Handler for .click() called." );
  var str= $("#text").text();

responsiveVoice.speak("dsfdsfdsfv");

});
</script>

</body>
</html>