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

<body>

	<header id="header">
		<div id="head" class="parallax" parallax-speed="1">
			<h1 id="logo" class="text-center">
				<img class="img-circle" src="assets/images/guy.jpg" alt="">
				<span class="title">Anthony Russel's Blog</span>
				<span class="tagline">A creative man is motivated by the desire to achieve, not by the desire to beat
					others.</span>
			</h1>
		</div>

		@yield('mainMenu')
	</header>

	<main id="main">

		<div class="container">
			<div class="row topspace">
				<div class="col-sm-8 col-sm-offset-2">

					<article class="post">
						<header class="entry-header">
							<div class="entry-meta">
								<span class="posted-on"><time class="entry-date published" date="2013-09-27">September
										27, 2013</time></span>
							</div>
							<h1 class="entry-title"><a href="single.html" rel="bookmark">Hello world!</a></h1>
						</header>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, molestias, architecto,
								adipisci, numquam dolor iusto eos reprehenderit placeat quam debitis quas magni eveniet.
								Saepe, nam, iste consectetur quae necessitatibus dolores provident veritatis possimus
								rerum facilis quia dicta itaque sapiente iusto natus quidem magni quibusdam. Explicabo
								nesciunt vel rem obcaecati reprehenderit eveniet culpa repudiandae. Distinctio, quia,
								provident illum necessitatibus repellendus rem voluptates exercitationem numquam
								inventore itaque atque sint nihil eveniet consequuntur eius! Laborum, at sit animi quae
								quidem ex tempora facilis.</p>
						</div>
					</article>

					<article class="post">
						<header class="entry-header">
							<div class="entry-meta">
								<span class="posted-on"><time class="entry-date published" date="2013-06-17">June 17,
										2013</time></span>
							</div>
							<h1 class="entry-title"><a href="single.html" rel="bookmark">Vivamus Lacus Mauris</a></h1>
						</header>
						<div class="entry-content">
							<p><img alt="" src="assets/images/mac.jpg"></p>
							<p>Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris
								commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus
								libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum.
								Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam
								fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis
								ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel
								arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus
								augue, sodales id cursus in, condimentum at risus. <a href="single.html" class="more-link">Continue reading&#8230;</a></p>
						</div>
					</article><!-- #post-## -->

					<article class="post">
						<header class="entry-header">
							<div class="entry-meta">
								<span class="posted-on"><time class="entry-date published" date="2013-06-17">June 17,
										2013</time></span>
							</div>
							<h1 class="entry-title"><a href="single.html" rel="bookmark">Vivamus Lacus Mauris</a></h1>
						</header>
						<div class="entry-content">
							<p>Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris
								commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus
								libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum.
								Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam
								fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis
								ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel
								arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus
								augue, sodales id cursus in, condimentum at risus.</p>
						</div>
					</article><!-- #post-## -->

					<article class="post">
						<header class="entry-header">
							<div class="entry-meta">
								<span class="posted-on"><time class="entry-date published" date="2013-04-04">April 4,
										2013</time></span>
							</div>
							<h1 class="entry-title"><a href="single.html" rel="bookmark">Maecenas Quisque Suspendisse
									Lorem</a></h1>
						</header>
						<div class="entry-content">
							<p>Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris
								commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus
								libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum.
								Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam
								fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis
								ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel
								arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus
								augue, sodales id cursus in, condimentum at risus. <a href="single.html" class="more-link">Continue reading&#8230;</a></p>
						</div>
					</article><!-- #post-## -->

					<article class="post">
						<header class="entry-header">
							<div class="entry-meta">
								<span class="posted-on"><time class="entry-date published" date="2013-03-20">March 20,
										2013</time></span>
							</div>
							<h1 class="entry-title"><a href="single.html" rel="bookmark">Pellentesque Eget Convallis</a>
							</h1>
						</header>
						<div class="entry-content">
							<p>Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris
								commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus
								libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum.
								Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam
								fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis
								ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel
								arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus
								augue, sodales id cursus in, condimentum at risus. <a href="single.html" class="more-link">Continue reading&#8230;</a></p>
						</div>
					</article><!-- #post-## -->
				</div>
			</div>

			<center class="">
				<ul class="pagination">
					<li class="disabled"><a href="">&laquo;</a></li>
					<li class="active"><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">5</a></li>
					<li><a href="">6</a></li>
					<li><a href="">&raquo;</a></li>
				</ul>
			</center>


		</div> <!-- /container -->

	</main>

	<footer id="footer" class="topspace">
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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum
							quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia
							asperiores adipisci maxime!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum
							quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia
							asperiores adipisci maxime!</p>
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