<?php
ini_set('error_reporting', E_ALL ^ E_NOTICE);
if($_POST['Submit']=="Submit")
{  
$name=$_POST['name'];
$message=$_POST['message'];
$email=$_POST['email'];


$to = "ghanshyamrawal48@gmail.com";
$headers .= "From: $name $email\n";
$headers.= "MIME-version: 1.0\n";
$headers.= "Content-type: text/html; charset= iso-8859-1\n";
$subject = 'Lovely & Sweet Group Enquiry';
$messages ="<html>


<body>
<table>
<tr><td>Name:</td><td>$name</td></tr>
<tr><td>Email:</td><td>$email</td></tr>
<tr><td>Message:</td><td>$message</td></tr>

</table>
</body></html>";
mail($to,$subject,$messages,$headers);
		}
						 
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from trendingtemplates.com/demos/coursat/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2015 05:00:44 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="">

	<title>LAS | Learning course</title>

    <link rel="shortcut icon" href="images/icon1.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/icon1.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon72X72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon114x114.png">
    
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/stroke.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- COLORS -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<!-- RS SLIDER -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <script>
function validateForm()
{
var x=document.forms["form1"]["Submit"].value;
if (x=="Submit")
  {
  alert("Thank you! We have received your message.");
  return true;
  }//else {
  //alert('You can place order of Rs.3500.00 to Rs.3700 INR only');
  //return false;
  //}
}
</script>
    <script>
function isAlphabet(elem)
	{
	
	//alert(elem);
		//var elem=document.getElementById('company');
		var helperMsg="Please Enter letters only";
		var alphaExp = /^[a-z\s]+$/i;
		if(elem.value.match(alphaExp)){
			return true;
		}else{
			alert(helperMsg);
			elem.value="";
			elem.focus();
			return false;
		}
}
function echeck()
{
		str=document.form1.email.value;
		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   document.form1.email.value="";
		   document.form1.email.focus();
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
		{
		    alert("Invalid E-mail ID")
		    document.form1.email.value="";
			document.form1.email.focus();
		    return false;
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
		{
		     alert("Invalid E-mail ID")
			 document.form1.email.value="";
			 document.form1.email.focus();
		     return false;
		}
		if (str.indexOf(at,(lat+1))!=-1)
		{
		     alert("Invalid E-mail ID")
			 document.form1.email.value="";
			 document.form1.email.focus();
		     return false;
		}
		if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
		{
		     alert("Invalid E-mail ID")
			 document.form1.email.value="";
			 document.form1.email.focus();
		     return false;
		}
		if (str.indexOf(dot,(lat+2))==-1)
		{
		     alert("Invalid E-mail ID")
			 document.form1.email.value="";
			 document.form1.email.focus();
		     return false;
		}
		if (str.indexOf(" ")!=-1)
		{
		     alert("Invalid E-mail ID")
			 document.form1.email.value="";
			 document.form1.email.focus();
		     return false;
		}
 		return true;	
}
function isnumber(txt)
{
	if( isNaN(txt.value)==true)
	{
		alert("Please enter Numbers only");
		txt.value="";
		txt.focus;
		return false;
	}
	return true;
}
</script>

</head>
<body>

    <div id="loader">
        <div class="loader-container">
			<div class="wow zoomIn" data-wow-duration="1s" data-wow-offset="100">
				<div class="wow rubberBand" data-wow-delay="2000ms" data-wow-duration="1s">
					<div class="wow pulse" data-wow-delay="100ms" data-wow-iteration="infinite" data-wow-duration="1s">
						<img src="images/logo3.png" alt="" class="loader-site">
					</div>
				</div>
			</div>
        </div>
    </div>

	<div id="wrapper">

		<div class="topbar clearfix">
			<div class="container">
				<div class="clearfix">
					<div class="pull-left">
						<div class="contactwrap text-left">
							<ul class="list-inline">
								<li style="background-color:#ffffff; color:black;"><i class="fa fa-phone"></i> Call Us : 08553900656</li>
								<li style="background-color:#ffffff; color:black;"><i class="fa fa-envelope"></i> Email Us : ghanshyamrawal48@gmail.com</li>
								<li class="dropdown" style="background-color:#000033; color:black;">
						            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-lock"></i> Login / Register</a>
						            <div class="dropdown-menu">
						                <form method="post" action="404-1.php"> 
						                	<div class="form-title">
						                		<h4>Login Area</h4>
						                		<hr>
						                	</div>
						                    <input class="form-control" type="text" name="username" placeholder="USER NAME"> 
						                    <div class="formpassword">
							                    <input class="form-control" type="password" name="password" placeholder="******"> 
							                    <span class="badge">Forget</span>
						                    </div>
						                    <div class="clearfix"></div>
						                    <button type="submit" class="btn btn-block btn-primary">LOGIN</button>
						                    <hr>
						                    <h4><a href="#">Create an Account</a></h4>
						                </form> 
						            </div>
								</li>
							</ul>
						</div><!-- end contactwrap -->
					</div><!-- end col -->

					<div class="pull-right">
						<ul class="social">
							<li class="facebook" style="background:#5d82d1;"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter" style="background: #40bff5;"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="google" style="background:#eb5e4c;"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="pinterest" style="background:#e13138;"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="vimeo" style="background:#35c6ea;"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
							<li class="linkedin" style="azimuth:#238cc8;"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="dribbble" style="background:#f7659c;"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li class="youtube" style="background:#ef4e41;"><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li class="rss" style="background:#faa33d;"><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end topbar -->

		<header class="header clearfix" style="background-color:#ffffff; box-shadow: 9px 17px 21px 16px black;">
			<div class="container" >
				<nav class="yamm navbar navbar-default">
		          	<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			             <span class="sr-only">Toggle navigation</span>
			             <span class="icon-bar"></span>
			             <span class="icon-bar"></span>
			             <span class="icon-bar"></span>
					</button>
		            <a class="navbar-brand" href="index.html"><img src="images/logo4.png" alt=""></a>
		          	</div>

					<div id="navbar" class="navbar-collapse collapse">
			            <ul class="nav navbar-nav navbar-right">
							<li ><a href="index.html" >Home</a>
								
							</li>
       						<li><a href="about-1.html">About</a></li>
							<li class="dropdown megamenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
								<ul class="dropdown-menu">
									<li>
										<div class="yamm-content">
											<div class="row-fluid"> 
												<div class="col-md-6 col-sm-6 col-xs-12 nopadding">
													<ul class="box">
														<li><a href="course-single-4.html">HTML</a></li>
														<li><a href="course-single-3.html">C,C++</a></li>
														<li><a href="course-single-1.html">Java Script</a></li>
														<li><a href="course_php.html">PHP</a></li>
														<li><a href="course-single-2.html">Web Designing</a></li>
													</ul>
												</div>
												
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li><a href="instructors-1.html">Instructors</a></li>
							
							<li class="active"><a href="contact-1.html">Contact</a></li>
							<li class="noborder">
			                    <div id="dmsearch" class="dmsearch">
			                        <form  id="form1" name="form1" onSubmit="return validateForm()"  method="post" action="executive_dialy_basis.php" >
			                            <div class="dm-search-container">
			                            <input id="s" class="dmsearch-input" type="text" name="s" value="" placeholder="Search">
			                            </div>
			                            <input id="go" class="dmsearch-submit" type="submit" value="">
			                            <span class="fa fa-search"></span>
			                        </form> <!-- end searchform -->
			                    </div><!-- end search -->
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</nav><!-- end nav -->
	      	</div><!-- end container -->
      	</header><!-- end header -->

	    <section id="contact_parallax" class="section-white page-title-wrapper" data-stellar-background-ratio="1" data-stellar-offset-parent="true">
			<div class="container">
				<div class="relative">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title text-center">
							<h4>Contact Us</h4>
							<hr>
							<p>We Wanna Hear From You </p>
							<ol class="breadcrumb">
							  <li><a href="index.html">Home</a></li>
							  <li class="active">Contact</li>
							</ol>
							</div><!-- end title -->
						</div><!-- end col -->
					</div><!-- end row -->
				</div><!-- end relative -->
			</div><!-- end container -->
		</section><!-- end section-white -->

		<center><section class="section-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<section class="googlemap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.153363828769!2d77.53616509999998!3d12.962036499999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e75a9c54c2d%3A0x8524939bbab8268c!2s398%2C+7th+Main+Rd%2C+Hampi+Nagar%2C+RPC+Layout%2C+Vijayanagar%2C+Bengaluru%2C+Karnataka+560104!5e0!3m2!1sen!2sin!4v1438764355765" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</section>
					</div><!-- end col -->
				</div></center><!-- end row -->

				<div class="row section-container">
					<div class="col-md-12">
						<div class="section-title text-center">
						<h4>Quick Contact</h4>
						<hr>
						<p>We Wanna Hear From You Soon!</p>
						</div><!-- end title -->
					</div><!-- end col -->
				</div><!-- end row -->

				<div class="row section-container">
					<div class="col-md-8">
                    
                    <form  class="row contact_form" id="form1" name="form1" onSubmit="return validateForm()"  method="post" action="contact-1.php" >
					
							<div class="col-md-6 col-sm-6">
							    <input type="text" class="form-control" placeholder="Your Name" name="name" id="name" required onChange="isAlphabet(this);"> 
							</div>
							<div class="col-md-6 col-sm-6">
							    <input type="text" class="form-control" placeholder="Your Email" name="email" id="email" required onChange="echeck();">
							</div>
							<div class="col-md-12 col-sm-6">
							    <textarea  name="message" id="message" class="form-control" placeholder="Message"></textarea>
							</div>
							<div class="col-md-12 col-sm-6">
							    <input type="Submit" class="btn btn-primary btn-block" name="Submit" id="Submit" value="Submit" />
							</div>
						</form>
					</div>
					<div class="col-md-4">
						<div class="contact-widget">
							<h4>Contact Information :</h4>
							<i class="fa fa-envelope"></i>
							<p>#398,5th Cross 7th Main Road RPC Layout Hampi Nagar,VijayNagar,Banglore-560104</p>
							<small>- ghanshyamrawal48@gmail.com</small>
							<small>- +91-8553900656</small>
						</div><!-- end contact-widget -->

						<div class="contact-widget">
							<h4>Business Hours :</h4>
							<i class="fa fa-clock-o"></i>
							<p>Monday – Friday : 9am to 20 pm<br>
							Saturday : 9am to 17 pm<br>
							Sunday : day off</p>
						</div><!-- end contact-widget -->

					</div><!-- end col -->
				</div>
			</div><!-- end container -->
		</section><!-- end section-white -->
<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="widget about-widget wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="widget-title">
								<h4>About</h4>
							</div><!-- end widget-title -->
							<p>Every one of us have things that we believe about ourselves when nobody else is looking, nobody else is listening, nobody else is monitoring what we're doing. We believe things about ourself</p>
							<ul class="contact-details">
								<li><i class="fa fa-map-marker"></i> #398,5th cross 7th Main Road<br> RPC Layout Hampingar,Vijayngar<br>Bangalore-560104</li>
								<li><i class="fa fa-phone"></i> +91-8553900656</li>
								<li><i class="fa fa-envelope"></i> ghanshyamrawal48@gmail.com</li>
							</ul><!-- end contact-details -->
						</div><!-- end widget -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6">
						<div class="widget about-widget wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="widget-title">
								<h4>Latest Courses</h4>
							</div><!-- end widget-title -->
							<ul class="latest-course">
								<li>
									<img src="upload/mini1.png" alt="" class="img-responsive alignleft">
									<h4><a href="#" title="">C,C++ Lessons</a></h4>
									<span>Date : Aug 1, 2015</span>
									<span>Created By : <a href="#">GHR</a></span>
								</li>
								<li>
									<img src="upload/mini2.png" alt="" class="img-responsive alignleft">
									<h4><a href="#" title="">Web Develop lessons</a></h4>
									<span>Date : Aug 01, 2014</span>
									<span>Created By : <a href="#">GHR</a></span>
								</li>
							</ul><!-- end latest-course -->
						</div><!-- end widget -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6">
						<div class="widget about-widget wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
							<div class="widget-title">
								<h4>Popular Tags</h4>
							</div><!-- end widget-title -->
							<div class="tagcloud">
								<a href="#">Responsive</a>
								<a href="#">Modern</a>
								<a href="#">Coursat HTML</a>
								<a href="#">Fresh</a>
								<a href="#">Corporate</a>
								<a href="#">Creative</a>
							</div><!-- end tagline -->
						</div><!-- end widget -->

						<div class="widget about-widget wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
							<div class="widget-title">
								<h4>Follow Us</h4>
							</div><!-- end widget-title -->
							<ul class="social">
								<li class="facebook" ><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li class="rss"><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div><!-- end widget -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6">
						<div class="widget about-widget wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
							<div class="widget-title">
								<h4>Latest Tweets</h4>
							</div><!-- end widget-title -->
							<ul class="latest-tweets">
								<li>
									<h4><a href="#" title="">@GHR</a> Educating the mind without educating the heart is no education at all..</h4>
									<span>2 hours ago</span>
								</li>
								<li>
									<h4><a href="#" title="">@GHR</a>Study without desire spoils the memory, and it retains nothing that it takes in..</h4>
									<span>2 hours ago</span>
								</li>
							</ul><!-- end latest-course -->
						</div><!-- end widget -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</footer><!-- end section-white -->

		<section class="copyrights">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<p>All Rights Reserved © LAS Group | Designed By <a href="#">Ghanshyam Rawal</a></p>
					</div><!-- end col -->
					<div class="col-md-6 col-sm-12">
						<ul class="footer-menu list-inline text-right">
							<li><a href="index.html">Home</a></li>
							<li><a href="about-1.html">About</a></li>
							<li><a href="contact-1.html">Contact</a></li>
							<li><a href="#">Purchase</a></li>
						</ul>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end copyrights -->
	</div><!-- end wrapper -->
    
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/retina.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/progress.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>

  	<!-- SLIDER REV -->
	<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script>
   /* ==============================================
	SLIDER -->
	=============================================== */   
	jQuery('.tp-banner').show().revolution(
	{
	dottedOverlay:"none",
	delay:16000,
	startwidth:1170,
	startheight:665,
	hideThumbs:200,     
	thumbWidth:100,
	thumbHeight:50,
	thumbAmount:5,  
	navigationType:"none",
	navigationArrows:"solo",
	navigationStyle:"preview3",  
	touchenabled:"on",
	onHoverStop:"on",
	swipe_velocity: 0.7,
	swipe_min_touches: 1,
	swipe_max_touches: 1,
	drag_block_vertical: false,          
	parallax:"mouse",
	parallaxBgFreeze:"on",
	parallaxLevels:[7,4,3,2,5,4,3,2,1,0],            
	keyboardNavigation:"off",   
	navigationHAlign:"center",
	navigationVAlign:"bottom",
	navigationHOffset:0,
	navigationVOffset:20,
	soloArrowLeftHalign:"left",
	soloArrowLeftValign:"center",
	soloArrowLeftHOffset:20,
	soloArrowLeftVOffset:0,
	soloArrowRightHalign:"right",
	soloArrowRightValign:"center",
	soloArrowRightHOffset:20,
	soloArrowRightVOffset:0,  
	shadow:0,
	fullWidth:"on",
	fullScreen:"off",
	spinner:"spinner4",  
	stopLoop:"off",
	stopAfterLoops:-1,
	stopAtSlide:-1,
	shuffle:"off",  
	autoHeight:"off",           
	forceFullWidth:"off",                         
	hideThumbsOnMobile:"off",
	hideNavDelayOnMobile:1500,            
	hideBulletsOnMobile:"off",
	hideArrowsOnMobile:"off",
	hideThumbsUnderResolution:0,
	hideSliderAtLimit:0,
	hideCaptionAtLimit:0,
	hideAllCaptionAtLilmit:0,
	startWithSlide:0
	});   
	</script>

	<script src="js/jquery.fitvids.js"></script>
	<script>
	  $(document).ready(function(){
	    // Target your .container, .wrapper, .post, etc.
	    $(".blog-media").fitVids();
	  });
	</script>

</body>

<!-- Mirrored from trendingtemplates.com/demos/coursat/contact-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2015 05:10:00 GMT -->
</html>