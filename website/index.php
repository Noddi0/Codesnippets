<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta content="Noud Bogers ICT & Media Design" name="description">
		<meta content="Noud Bogers" name="author">
		<title>Noud Bogers</title>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
	</head>	
	<body id="page-top" data-target=".navbar-fixed-top" data-spy="scroll">
		<div id="overlay"></div>
		<div id="specialbox">  <!--Design & Development-->
			<h1> Design&Development</h1>
			<div class="close-button">
				<a onmousedown="toggleOverlay()"><img src="close-button.png" alt="Exit" /></a></a>
			</div>
			<object data="ded.pdf" type="application/pdf" width="100%" height="100%">
 
  			<p>It appears you don't have a PDF plugin for this browser.
  			No biggie... you can <a href="ded.pdf">click here to
  			download the PDF file.</a></p>
  
			</object>
		</div>
		<div id="specialbox2"> <!-- Strategie & Concept -->
			<h1> Strategie&Concept</h1>
			<div class="close-button">
				<a onmousedown="toggleOverlay2()"><img src="close-button.png" alt="Exit" /></a></a>
			</div>
			<object data="portfolio.pdf" type="application/pdf" width="100%" height="100%">
  				<p>It appears you don't have a PDF plugin for this browser.
  				No biggie... you can <a href="ded.pdf">click here to
  				download the PDF file.</a></p>
			</object>
		</div>
		<div id="specialbox3"> <!-- User Centered Design -->
			<h1> User Centered Design</h1>
			<div class="close-button">
				<a onmousedown="toggleOverlay3()"><img src="close-button.png" alt="Exit" /></a></a>
			</div>
			<object data="portfolio.pdf" type="application/pdf" width="100%" height="100%">
  				<p>It appears you don't have a PDF plugin for this browser.
  				No biggie... you can <a href="ded.pdf">click here to
  				download the PDF file.</a></p>
			</object>
		</div>	
		<div id="specialbox4"> <!-- Proftaak -->
			<h1> Proftaak</h1>
			<div class="close-button">
				<a onmousedown="toggleOverlay4()"><img src="close-button.png" alt="Exit" /></a></a>
			</div>
			<object data="portfolio.pdf" type="application/pdf" width="100%" height="100%">
  				<p>It appears you don't have a PDF plugin for this browser.
  				No biggie... you can <a href="ded.pdf">click here to
  				download the PDF file.</a></p>
			</object>
		</div>
		<div id="specialbox5"> <!-- Professionele ontwikkeling -->
			<h1> Professionele ontwikkeling</h1>
			<div class="close-button">
				<a onmousedown="toggleOverlay5()"><img src="close-button.png" alt="Exit" /></a></a>
			</div>
			<object data="portfolio.pdf" type="application/pdf" width="100%" height="100%">
  				<p>It appears you don't have a PDF plugin for this browser.
  				No biggie... you can <a href="ded.pdf">click here to
  				download the PDF file.</a></p>
			</object>
		</div>			
		<nav class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="navigation" id="nav">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top">NoudBogersDesign</a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="hidden">
							<a class="page-scroll" href="#page-top"></a>
						</li>
						<li class="">
							<a class="page-scroll" href="#vakken">Vakken</a>
						</li>
						<li class="">
							<a class="page-scroll" href="login.php">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<section id="intro" class="intro-section">
				<img id="noud" src="noudbogers.jpg" alt="Plaatje van mezelf">
		</section>
		<section id="vakken" class="vakken-section">
			<div class="container">
				<div class"col-lg-6" id="vak1">
					<h1>Vakken </h1>
				</div>
				<div class="row">
					<div class="col-lg-4" id="left">
						<div class="vak">
							<a onmousedown="toggleOverlay()"><img src="ded.jpg" alt="DED" /></a>
							<a onmousedown="toggleOverlay()"><h2><span> Design&Development</span></h2></a>
						</div>
						<div class="vak">
							<a onmousedown="toggleOverlay2()"><img src="sco.jpg" alt="SCO" /></a>
							<a onmousedown="toggleOverlay2()"><h2><span> Strategie&Concept</span></h2></a>
						</div>
					</div>
					<div class="col-lg-4" id="middle">
						<div class="vak">
							<a onmousedown="toggleOverlay3()"><img src="uxu.jpg" alt="UXU" /></a>
							<a onmousedown="toggleOverlay3()"><h2><span> User Centered Design</span></h2></a>
						</div>
						<div class="vak">
							<a onmousedown="toggleOverlay4()"><img src="ptm.jpg" alt="PTM" /></a>
							<a onmousedown="toggleOverlay4()"><h2><span> Proftaak</span></h2></a>
						</div>
						</div>
					<div class="col-lg-4" id="right">
						<div class="vak">
							<a onmousedown="toggleOverlay5()"><img src="ppm.jpg" alt="PPM" /></a>
							<a onmousedown="toggleOverlay5()"><h2><span> Professionele Ontwikkeling</span></h2></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="vakken" class="vakken-section">
			<div class="container">
				<div class"col-lg-12" id="vak1">
					
				</div>
			</div>
		</section>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/fade-in.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script src="js/overlay.js"></script>
	</body>
</html>