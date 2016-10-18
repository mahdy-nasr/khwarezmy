<?php
session_start();
include("PHPMailer/class.phpmailer.php");
require 'PHPMailer/PHPMailerAutoload.php';


if(!isset($_SESSION['done']))
 		$_SESSION['done']=0;
//else
			//header("Location: " . "http://" . $_SERVER['HTTP_HOST']. '/khwarezmy'.$_SESSION['done']);


if(isset($_POST)&&!empty($_POST)&&count($_POST))
{

	if((isset($_POST['name'])&&!empty($_POST['name']))&&(isset($_POST['email'])&&!empty($_POST['email']))&&(isset($_POST['message'])&&!empty($_POST['message'])))
	{
		$to1="mahdy.m.nasr@gmail.com";

		$from='atlantistore@atlantistore.com';
		$subject="client to Khwarezmy";
		$message='From : '.$_POST['email'].'<br>'.$_POST['message'];
		if(isset($_POST['subject'])&&!empty($_POST['subject']))
			$message.='<br> Subject:'.$_POST['subject'];
		$headers="From: $from\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=iso-8859-1\n";
		$_SESSION['done']=1;
		if(!in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) 
		{
					mail($to1,$subject,$message,$headers); 

					mail('mr.basioo@gmail.com',$subject,$message,$headers); 
				               // set the SMTP port for the GMAIL server
				  /*  $mail = new PHPMailer();
					$mail->IsSMTP();
					$mail->CharSet = 'UTF-8';
					$mail->Host = "smtp-mail.outlook.com";
					$mail->SMTPAuth= true;
					$mail->Port = 587;
					$mail->Username   = "khwarzmy@outlook.com"; // SMTP account username example
					$mail->Password   = "Khwarzm2016";  
					$mail->SMTPSecure = 'tls';
					$mail->From = 'khwarzmy@outlook.com' ;
					$mail->FromName= 'khwarzmy client';
					$mail->isHTML(true);
					$mail->Subject = 'new client';
					if(isset($_POST['subject'])&&!empty($_POST['subject']))
						$mail->Subject = $_POST['subject'];

					$mail->Body = $message;
					$mail->addAddress('mr.basioo@gmail.com');

					$mail->send();
					$mail->addAddress($to1);
					$mail->send();

*/

			header("Location: " . "http://" . $_SERVER['HTTP_HOST']);

		}
		else
		header("Location: " . "http://" . $_SERVER['HTTP_HOST']. '/khwarezmy');
		die();
	}
}
?>

<!--A Design by Khwarezmy 
Author: Khwarezmy
Author URL: http://khwarezmy.com
-->
<!DOCTYPE html>

<html>
<head>
<title>Khwarzmy</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="software house , web development mobile development android development" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top-30},1000);
						});
					});
					</script>

<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

</head>
<body>
<div id='confirm' style='position:fixed; top:40vh;left: 0vw; margin:0 auto; right:0;width: auto;height: auto; border:1px solid black; background: #F05E6B; color:#fff;z-index: 999999999;text-align: center;display: none;'>
<h2 style="margin:20px;">Your Message has been sent successfully :)</h2>

</div>


<!--header-->
<div class="header" id="header">
	<div class="head" >
				<div class="nav-top" >
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						 <div class="navbar-brand logo ">
							<h1 class="animated wow pulse" data-wow-delay=".5s">
							<a href="index.php">Khwarzmy</a></h1>
						</div>
<div class="clearfix"></div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil links" id="bs-example-navbar-collapse-1">
					<div class="fill">
					<ul class="nav navbar-nav ">
					<li ><a href="index.html" class="scroll active" data-hover="Home">Home</a> </li>
						<li ><a href="#services" class="scroll" data-hover="About">Services</a> </li>
						<li><a href="#gallery" class="scroll" data-hover="Gallery">Portfolio</a></li>

						<li><a href="#testimonials" class="scroll" data-hover="Gallery">Testimonials</a></li>
						<li><a href="#contact" class="scroll" data-hover="Contact">Contact</a></li>
					  </ul>
					  <div class="clearfix"></div>
					</div>
					</div><!-- /.navbar-collapse -->
				</div>
	
<!-- start search-->
	
			
				 <!--search-scripts
				 <script src="js/classie.js"></script>
				 <script src="js/uisearch.js"></script>
				   <script>
					 new UISearch( document.getElementById( 'sb-search' ) );
				   </script>
					<!//search-scripts-->


			  <div class="clearfix"></div>	
		</div>
	
</div>
<!--content-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: false,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>

<div class="banner">
<div class="container">

	<!--banner-->
		 <div class="slider">
			<ul class="rslides" id="slider2">
			  <li><div class="banner-text">
		<h2> we promise you <span>State Of Art Apps</span></h2>
		<h6>                                  </h6>
	</div></li>
			  <li><div class="banner-text">
			
		<h2> we promise you  <span> 24/7 communication </span></h2>
		<h6>    					</h6>
	</div></li>
			  <li><div class="banner-text">
		<h2>we promise you <span>A Statsyfying Worry Free Experince</span></h2>

	</div></li>		 
			</ul>
		</div>
		
</div>
</div>
<!--content-->
<div class="service" id="services" style="background:#eee;" >
	<div class="container">
		<div class="ser-top">
			<h3>Services</h3>
			<div class="ser-t">
				<b></b>
				<b class="line"></b>
			</div>
						


		</div>
		<div class="service-head">
		
			<div class="col-md-12 ser-head1" >
				<div class="col-md-6  ser-grid">
					<div class=''>
						<span></span>
						<div class=" hi-icon-effect-7 hi-icon-effect-7a">
							<i class="glyphicon glyphicon-globe hi-icon "> </i>
						</div>
						<h3>Web Development</h3>
										<p>We go deep into understanding your Business' and provide you with the best solution that will fulfill your business goals.</p>

					</div>

				</div>

				<div class="col-md-6  ser-grid">
					<div class=''>

						<div class=" hi-icon-effect-7 hi-icon-effect-7a">
							<i class="glyphicon glyphicon-phone hi-icon " > </i>
						</div>
						<h3>Mobile Development</h3>
										<p>We create highly polished iPhone & Android apps for startup and enterprise clients.</p>

					</div>
				</div>
			</div>
			

			<div class="col-md-12 ser-head1">


				<div class="col-md-6 ser-grid ">
					<div class=" hi-icon-effect-7 hi-icon-effect-7a">
						<i class="glyphicon glyphicon-shopping-cart hi-icon "> </i>
					</div>
					
					<h3>E-COMMERCE</h3>
					<p>Raise the bar for your customers with an online experience that exceeds their expectations and enhances your ROI</p>
				</div>
				<div class="col-md-6 ser-grid ">
					<div class=" hi-icon-effect-7 hi-icon-effect-7a">
						<i class="glyphicon glyphicon-cloud-upload hi-icon"> </i>
					</div>
					<h3>Company Digitizing</h3>
					<p>We take your business to the next level by automating all your daily routins so you can focuse on whats important</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>

					<!--gallery-->
<div class="gallery" id="gallery"  >
	<div class="container">
		<div class="ser-top ga-top" style="padding-top:10px;">
			<h3>Portfolio </h3>
			<div class="ser-t">
				<b></b>
				<b class="line"></b>
			</div>
						

		</div>
		<style>
			spam.flicon
			{
				border-right: 2px solid;
				margin-right: 10px;
				padding-right: 10px;

			}
		</style>
            <ul class="simplefilter">
                
                <li class="active mnfl" data-filter="1"><spam class='flicon glyphicon glyphicon-globe '></spam>Real Estate Portal</li>
                <li class='mnfl' data-filter="2"><spam class='flicon glyphicon glyphicon-globe '></spam>Online Shoppign</li>
                <li class='mnfl' data-filter="3"><spam class='flicon glyphicon glyphicon-globe '></spam>online Education</li>
                <li class='mnfl' data-filter="4"><spam class='flicon glyphicon glyphicon-globe '></spam>Book Store</li>
                <li class='mnfl' data-filter="5"><spam class='flicon glyphicon glyphicon-phone '></spam>TalabKom</li>
                <li class='mnfl' data-filter="6"><spam class='flicon glyphicon glyphicon-phone '></spam>Coordinate Tech</li>


            </ul>
     
            <div class="filtr-container " style="">
                            <!-- _____________________ estate images  ________________________ -->

                <div class="  filtr-item web gallery-t" data-category="1" data-sort="Busy streets">
	                <a href="images/port/estate/1.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/estate/1.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>
                <div class="  filtr-item web " data-category="1" data-sort="Busy streets">
	                <a href="images/port/estate/2.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/estate/2.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>
                 <div class="  filtr-item web " data-category="1" data-sort="Busy streets">
	                <a href="images/port/estate/3.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/estate/3.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>
                 <div class="  filtr-item web " data-category="1" data-sort="Busy streets">
	                <a href="images/port/estate/4.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/estate/4.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                                <!-- _____________________ onlineshopping images  ________________________ >
               

                  <div class="  filtr-item mob " data-category="2" data-sort="Busy streets">
	                <a href="images/port/onlineshopping/4.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/onlineshopping/4.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                  <div class="  filtr-item mob " data-category="2" data-sort="Busy streets">
	                <a href="images/port/onlineshopping/5.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/onlineshopping/5.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                  <div class="  filtr-item mob " data-category="2" data-sort="Busy streets">
	                <a href="images/port/onlineshopping/6.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/onlineshopping/6.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                <div class="  filtr-item web " data-category="2" data-sort="Busy streets">
	                <a href="images/port/onlineshopping/1.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/onlineshopping/1.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>
                  <div class="  filtr-item web " data-category="2" data-sort="Busy streets">
	                <a href="images/port/onlineshopping/2.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/onlineshopping/2.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>
                  <div class="  filtr-item web " data-category="2" data-sort="Busy streets">
	                <a href="images/port/onlineshopping/3.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/onlineshopping/3.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div-->
                <!-- _____________________ brainiac images  ________________________ >

                <div class="  filtr-item web " data-category="3" data-sort="Busy streets">
	                <a href="images/port/brainiac/1.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/brainiac/1.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                  <div class="  filtr-item web " data-category="3" data-sort="Busy streets">
	                <a href="images/port/brainiac/2.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/brainiac/2.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                  <div class="  filtr-item web " data-category="3" data-sort="Busy streets">
	                <a href="images/port/brainiac/3.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/brainiac/3.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                  <div class="  filtr-item web " data-category="3" data-sort="Busy streets">
	                <a href="images/port/brainiac/4.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/brainiac/4.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                  <div class="  filtr-item web " data-category="3" data-sort="Busy streets">
	                <a href="images/port/brainiac/5.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/brainiac/5.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div-->

                <!-- _____________________ bookstore images  ________________________ >

                 <div class="  filtr-item web " data-category="4" data-sort="Busy streets">
	                <a href="images/port/bookstore/1.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/bookstore/1.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                 <div class="  filtr-item web " data-category="4" data-sort="Busy streets">
	                <a href="images/port/bookstore/2.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/bookstore/2.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                 <div class="  filtr-item web " data-category="4" data-sort="Busy streets">
	                <a href="images/port/bookstore/3.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/bookstore/3.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                 <div class="  filtr-item web " data-category="4" data-sort="Busy streets">
	                <a href="images/port/bookstore/4.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/bookstore/4.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div>

                 <div class="  filtr-item web " data-category="4" data-sort="Busy streets">
	                <a href="images/port/bookstore/5.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure>
							<img src="images/port/bookstore/5.png" class="img-responsive" alt=" " />	
						</figure>

					</a>
                </div-->

                

                <!-- _____________________ Talabkom images  ________________________ >

                <div class=" filtr-item mob" data-category="5" data-sort="Dreamhouse">
                  <a href="images/port/talabkom/language.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/talabkom/language.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div>

                <div class=" filtr-item mob" data-category="5" data-sort="Dreamhouse">
                  <a href="images/port/talabkom/home.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/talabkom/home.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div>

                <div class=" filtr-item mob" data-category="5" data-sort="Dreamhouse">
                  <a href="images/port/talabkom/signup.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/talabkom/signup.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div>


                <div class=" filtr-item mob" data-category="5" data-sort="Dreamhouse">
                  <a href="images/port/talabkom/navdrawer.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/talabkom/navdrawer.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div>

                <div class=" filtr-item mob " data-category="5" data-sort="Dreamhouse">
                  <a href="images/port/talabkom/allmap.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/talabkom/allmap.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div>

                <div class=" filtr-item mob " data-category="5" data-sort="Dreamhouse">
                  <a href="images/port/talabkom/permission.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/talabkom/permission.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div-->

                 <!-- _____________________ Coordinate tech images  ________________________ >

                 <div class=" filtr-item mob" data-category="6" data-sort="Dreamhouse">
                  <a href="images/port/QR/login.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/QR/login.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div>

                <div class=" filtr-item mob" data-category="6" data-sort="Dreamhouse">
                  <a href="images/port/QR/list.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/QR/list.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div>

                <div class=" filtr-item mob" data-category="6" data-sort="Dreamhouse">
                  <a href="images/port/QR/setails.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/QR/setails.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div>


                <div class=" filtr-item mob" data-category="6" data-sort="Dreamhouse">
                  <a href="images/port/QR/qrscan.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/QR/qrscan.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div>

                <div class=" filtr-item mob" data-category="6" data-sort="Dreamhouse">
                  <a href="images/port/QR/submission.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/port/QR/submission.png" class="img-responsive" alt=" " />	
					</figure>
				</a>

                </div-->



                
				
               <div class="clearfix"> </div>
            </div>

  </div>

</div>


    <!-- Include jQuery & Filterizr -->
    
    <script src="js/jquery.filterizr.js"></script>
    <script src="js/controls.js"></script>

    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
	<!---->
	<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			//$('.filtr-item a').Chocolat();
		});
		</script>

	<!--//gallery-->
	<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>

	 <!-- requried-jsfiles-for owl -->
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
 <!-- start content_slider -->
						      
				
	<!---->

	<div class="test" id="testimonials">
		<div class="container">
		<div class="ser-top ga-top">
			<h3>Testimonials</h3>
			<div class="ser-t">
				<b></b>
				<b class="line"></b>
			</div>
						


		</div>
			<div class=" test-grid-1" style="padding-bottom:40px;">
				<!--div class=" col-md-4 test-wrapper">
					<img src="images/tt2.png" alt="" class="img-responsive">
					</div-->

					<div class="col-md-10 col-md-offset-1 test-grid1">
					 <div id="owl-demo2" class="owl-carousel">
							   			<div class=" test-grid">
						<p>AtlantisKey was a game changer in the Real State business in North Cyprus and for our business for sure. Our clients are very pleased with the simplicity of the website and that was only possible due to the dedication of the UI and UX team in khwarezmy.
One of the main features that gave us a huge competitive edge in the market was the powerful search engine, the accuracy and speed were impressive.
Overall, we definitely recommend Khwarezmy to anyone who is looking for trusted software house.</p>
							<img src="images/left-1.png" alt="" class="img-responsive">
						<h4>AtlantisKey</h4>
					</div>	
								<div class=" test-grid">
						<p>Khwarezmy was more like an in-house development department to us than an outsourcing software house. They got involved and provide support from the ideation phase until the launching day. What was more satisfying was their continuous support after lunching.
We can not wait to launch our mobile app.</p>
							<img src="images/left-1.png" alt="" class="img-responsive">
						<h4>Hyper Store</h4>
					</div>	
	<div class=" test-grid">
						<p>I did not need a CTO, Khwarezmy was more than enough for me to open my startup and start making money. And best of all, I did not need an app as the website is completely responsive.</p>
							<img src="images/left-1.png" alt="" class="img-responsive">
						<h4>Brainiac online academy</h4>
					</div>						
								</div>
					
					</div>
					<div class="clearfix"></div>
				</div>
				
			</div>
		</div>
	</div>
<!--
<div class="team" id="team">
	<div class="container">
		<div class="ser-top ga-top">
			<h3>Our Team</h3>
			<div class="ser-t">
				<b></b>
				<b class="line"></b>
			</div>

		</div>
		
		<div class="col-md-3 bottom-grid ">
			<div class="btm-right">
				<img src="images/te.jpg" class="img-responsive" alt=" ">
					<div class="captn">						
							<h4>Victoria</h4>
							<p>Ceo</p>
						<ul class="captn2">
							<li><a href="#" class="icon1"></a></li>
							<li><a href="#" class="icon2"></a></li>
							<li><a href="#" class="icon3"></a></li>
						</ul>
					</div>
			</div>
		</div>
		<div class="col-md-3 bottom-grid ">
			<div class="btm-right">
				<img src="images/te1.jpg" class="img-responsive" alt=" ">
					<div class="captn">
					
							<h4>Adley</h4>
						<p>Manager</p>
						<ul class="captn2">
							<li><a href="#" class="icon1"></a></li>
							<li><a href="#" class="icon2"></a></li>
							<li><a href="#" class="icon3"></a></li>
						</ul>
					</div>
			</div>
		</div>
		<div class="col-md-3 bottom-grid ">
			<div class="btm-right">
				<img src="images/te2.jpg" class="img-responsive" alt=" ">
					<div class="captn">
						
							<h4>Immortal</h4>
						<p>Web developer</p>
						<ul class="captn2">
							<li><a href="#" class="icon1"></a></li>
							<li><a href="#" class="icon2"></a></li>
							<li><a href="#" class="icon3"></a></li>
						</ul>
					</div>
			</div>
		</div>
		<div class="col-md-3 bottom-grid ">
			<div class="btm-right">
				<img src="images/te3.jpg" class="img-responsive" alt=" ">
					<div class="captn">
						
							<h4>Warlike</h4>
							<p>Web designer</p>
						<ul class="captn2">
							<li><a href="#" class="icon1"></a></li>
							<li><a href="#" class="icon2"></a></li>
							<li><a href="#" class="icon3"></a></li>
						</ul>
					</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>	
-->
<!--contact-->
	<div class="map-top" id="contact">
				<div class="col-md-8 map" style="background:#fff;padding-bottom: 4.5em;">
					<div class="contact" style="margin-top:20px;padding:0;">
						<div class="row col-xs-12" >
							<div class="ser-top ga-top" >
									<h3>Contact</h3>
									<div class="ser-t">
										<b></b>
										<b class="line"></b>
									</div>
												

								</div>
										<div class="top-contact">
										<form action="" method="post" >
										<div class="col-md-6 grid-contact">
											<div class="your-top">
												<i class="glyphicon glyphicon-user"> </i>
												<input type="text" placeholder="Name" name="name"  required >								
												<div class="clearfix"> </div>
											</div>
											<div class="your-top">
												<i class="glyphicon glyphicon-envelope"> </i>
												<input type="text" placeholder="E-mail" name="email" required>								
												<div class="clearfix"> </div>
											</div>
											<div class="your-top">
												<i class="glyphicon glyphicon-link"> </i>
												<input type="text" placeholder="Subject" name="subject"  required>								
												<div class="clearfix"> </div>
											</div>
											
										</div>
										<div class="col-md-6 grid-contact-in">
											<textarea  placeholder=" Message" name="message"  required></textarea>
											<input type="submit" value="Send">
										</div>
										<div class="clearfix"> </div>
										</form>
										<div class="clearfix"> </div>

									</div>
					</div>
				</div>
						<div class="clearfix"> </div>

			</div>

					<div class="col-md-4 address">
					<div class="contact-grid1">
						
						
							<h4>Address</h4>
							<p>1 Mkan Aprat. Famagusta <span>Cyprus.</span></p>
						
					</div>
			
					<div class="contact-grid1">
						
							<h4>Call Us</h4>
							<p>+905338524951<span>+905338529496</span></p>
						
					</div>
			
				
					<div class="contact-grid1">
						
							<h4>Email</h4>
							<p><a href="mailto:khwarzmy@outlook.com">khwarzmy@outlook.com</a></p>
						
					</div>
				
					</div>
					<div class="clearfix"> </div>
				</div>

		

	<!--footer-->
	<div class="copy">
		<p class="footer-grid" >© 2016 last updates . All rights reserved | Design by  <a href="http://Khwarzmy.com/" target="_blank">Khwarzmy</a> </p>
		<ul class="captn2 footer-sc">
							<li><a href="https://www.facebook.com/khwarezmy/" class="icon1"></a></li>
						<!--	<li><a href="#" class="icon2"></a></li>
							<li><a href="#" class="icon3"></a></li>
							-->
								
						</div>
	</div>
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
						<?php if($_SESSION['done']==1):$_SESSION['done']=0; ?>
						$('#confirm').fadeIn(1000).delay(500).fadeOut(1000);
						<?php endif;?>
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	 </div>

<!-- for bootstrap working -->
	<script src="js/bootstrap.min.js"></script>
<!-- //for bootstrap working -->
</body>
</html>