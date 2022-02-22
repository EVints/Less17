<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

	<title>{{$content->getPageTitle()}}</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	@yield('cssStyle')
</head>

<body class="home">

	<header id="header">
		<div id="head" class="parallax" parallax-speed="2">
			<h1 id="logo" class="text-center">
				<img class="img-circle" src="assets/images/guy.jpg" alt="">
				<span class="title">Anthony Russel</span>
				<span class="tagline">A mystery person<br>
					<a href="">anthony.russel42@example.com</a></span>
			</h1>
		</div>

		@yield('mainMenu')
	</header>

	<main id="main">

		<div class="container">

			<div class="row section topspace">
				<div class="col-md-12">
					<p class="lead text-center text-muted">Let me tell you something my friend. hope is a dangerous thing. hope can drive a man insane. you <a href="about.html">measure</a> yourself by the people who measure themselves by you. it only took me <a href="sidebar-right.html">six days</a>. </p>
				</div>
			</div> <!-- / section -->

			<div class="row section featured topspace">
				<h2 class="section-title"><span>Services</span></h2>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<h3 class="text-center">Custom website design</h3>
						<p>I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn't eat for three weeks. i once heard a wise man say there are no perfect men.</p>
						<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
					</div>
					<div class="col-sm-6 col-md-3">
						<h3 class="text-center">Wordpress integration</h3>
						<p>I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn't eat for three weeks. i once heard a wise man say there are no perfect men.</p>
						<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
					</div>
					<div class="col-sm-6 col-md-3">
						<h3 class="text-center">Application development</h3>
						<p>I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn't eat for three weeks. i once heard a wise man say there are no perfect men.</p>
						<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
					</div>
					<div class="col-sm-6 col-md-3">
						<h3 class="text-center">SEO &amp; SEM services</h3>
						<p>I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn't eat for three weeks. i once heard a wise man say there are no perfect men.</p>
						<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
					</div>
				</div>
			</div> <!-- / section -->

			<div class="row section recentworks topspace">

				<h2 class="section-title"><span>Recent Works</span></h2>

				<div class="thumbnails recentworks row">

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a class="thumbnail" href="sidebar-right.html">
							<span class="img">
								<img src="assets/images/s1.jpg" alt="">
								<span class="cover"><span class="more">See details &rarr;</span></span>
							</span>
							<span class="title">Sample title - big data solutions</span>
						</a>
						<span class="details"><a href="">Web design</a> | <a href="">Wordpress</a> | <a href="">Logotype</a></span>
						<h4></h4>
						<p></p>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a class="thumbnail" href="sidebar-right.html">
							<span class="img">
								<img src="assets/images/s1.jpg" alt="">
								<span class="cover"><span class="more">See details &rarr;</span></span>
							</span>
							<span class="title">Pure ipsum - development services for people</span>
						</a>
						<span class="details"><a href="">Web design</a> | <a href="">Wordpress</a></span>
						<h4></h4>
						<p></p>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a class="thumbnail" href="sidebar-right.html">
							<span class="img">
								<img src="assets/images/s1.jpg" alt="">
								<span class="cover"><span class="more">See details &rarr;</span></span>
							</span>
							<span class="title">Lorem studios - interior and patio design</span>
						</a>
						<span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
						<h4></h4>
						<p></p>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a class="thumbnail" href="sidebar-right.html">
							<span class="img">
								<img src="assets/images/s1.jpg" alt="">
								<span class="cover"><span class="more">See details &rarr;</span></span>
							</span>
							<span class="title">Pure ipsum - development services for people</span>
						</a>
						<span class="details"><a href="">Web design</a> | <a href="">Wordpress</a></span>
						<h4></h4>
						<p></p>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a class="thumbnail" href="sidebar-right.html">
							<span class="img">
								<img src="assets/images/s1.jpg" alt="">
								<span class="cover"><span class="more">See details &rarr;</span></span>
							</span>
							<span class="title">Lorem studios - interior and patio design</span>
						</a>
						<span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
						<h4></h4>
						<p></p>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a class="thumbnail" href="sidebar-right.html">
							<span class="img">
								<img src="assets/images/s1.jpg" alt="">
								<span class="cover"><span class="more">See details &rarr;</span></span>
							</span>
							<span class="title">Lorem studios - interior and patio design</span>
						</a>
						<span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
						<h4></h4>
						<p></p>
					</div>
				</div>

			</div> <!-- /section -->

			<div class="row section topspace">
				<div class="panel panel-cta">
					<div class="panel-body">
						<div class="col-lg-8">
							<p>A simple, nice-looking <b>call to action box</b>. Boxing is about respect. getting it for yourself,
								and taking it away from the other guy. no, this is mount everest. </p>
						</div>
						<div class="col-lg-4 text-right">
							<a href="http://www.gettemplate.com/downloads/initio.zip " class="btn btn-primary btn-lg">Download template</a>
						</div>
					</div>
				</div>
			</div> <!-- /section -->

			<div class="row section clients topspace">
				<h2 class="section-title"><span>Clients</span></h2>
				<div class="col-lg-12">
					<p>
						<img src="assets/images/sample_clients.png" alt="">
					</p>
				</div>
			</div> <!-- /section -->

		</div> <!-- /container -->

	</main>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 widget">
					<h3 class="widget-title">Contact</h3>
					<div class="widget-body">
						<p>+234 23 9873237<br>
							<a href="mailto:#">some.email@somewhere.com</a><br>
							<br>
							234 Hidden Pond Road, Ashland City, TN 37015
						</p>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Follow me</h3>
					<div class="widget-body">
						<p class="follow-me-icons">
							<a href=""><i class="fa fa-twitter fa-2"></i></a>
							<a href=""><i class="fa fa-dribbble fa-2"></i></a>
							<a href=""><i class="fa fa-github fa-2"></i></a>
							<a href=""><i class="fa fa-facebook fa-2"></i></a>
						</p>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Text widget</h3>
					<div class="widget-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Form widget</h3>
					<div class="widget-body">
						<p>+234 23 9873237<br>
							<a href="mailto:#">some.email@somewhere.com</a><br>
							<br>
							234 Hidden Pond Road, Ashland City, TN 37015
						</p>
					</div>
				</div>

			</div> <!-- /row of widgets -->
		</div>
	</footer>

	<footer id="underfooter">
		<div class="container">
			<div class="row">

				<div class="col-md-6 widget">
					<div class="widget-body">
						<p>234 Hidden Pond Road, Ashland City, TN 37015 </p>
					</div>
				</div>

				<div class="col-md-6 widget">
					<div class="widget-body">
						<p class="text-right">
							Copyright &copy; 2014, Your awesome name here<br>
							Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
					</div>
				</div>

			</div> <!-- /row of widgets -->
		</div>
	</footer>



	@yield('jScript')
</body>

</html>