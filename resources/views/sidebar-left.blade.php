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
				<span class="title">Anthony Russel</span>
				<span class="tagline">A mystery person<br>
					<a href="">anthony.russel42@example.com</a></span>
			</h1>
		</div>

		@yield('mainMenu')
	</header>

	<main id="main">

		<div class="container">

			<div class="row topspace">

				<!-- Sidebar -->
				<aside class="col-md-4 sidebar sidebar-left">

					<div class="row widget">
						<div class="col-xs-12">
							<h4>Lorem ipsum dolor sit</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus
								reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
						</div>
					</div>
					<div class="row widget">
						<div class="col-xs-12">
							<h4>Lorem ipsum dolor sit</h4>
							<p><img src="assets/images/s1.jpg" alt=""></p>
						</div>
					</div>
					<div class="row widget">
						<div class="col-xs-12">
							<h4>Lorem ipsum dolor sit</h4>
							<p><img src="assets/images/s1.jpg" alt=""></p>
							<p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim
								consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
						</div>
					</div>

				</aside> <!-- /Sidebar -->

				<!-- Article main content -->
				<article class="col-sm-8 maincontent">
					<header class="page-header">
						<h1 class="page-title">Lorem ipsum dolor sit amet, consectetur.</h1>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus
						eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam
						aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.
					</p>
					<h3>Necessitatibus</h3>
					<p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae
						maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta
						aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius
						repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat
						consectetur quam aliquam!</p>
					<blockquote>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur
						optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque
						dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat,
						consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium
						voluptates placeat consectetur quam aliquam!</blockquote>
					<p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae
						maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta
						aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius
						repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat
						consectetur quam aliquam!</p>
					<h3>Fugit, laboriosam</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea a reiciendis vitae provident atque
						accusamus nam repudiandae accusantium perspiciatis consectetur. Ad, est, deleniti quis iusto
						labore iste totam cum maiores accusantium nobis error inventore explicabo laboriosam temporibus
						in rem nemo?</p>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus!</li>
						<li>Laboriosam, aliquam totam asperiores nam velit voluptatum non quidem.</li>
						<li>Voluptatem, libero quia voluptatum ab modi facere dolore assumenda?</li>
						<li>Expedita, officia tenetur doloremque nulla temporibus ab voluptates adipisci.</li>
						<li>Nostrum, nesciunt, inventore amet temporibus officia perferendis doloremque nulla.</li>
						<li>Dolorum, ex earum maiores perspiciatis modi sequi odit mollitia.</li>
					</ul>
					<p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi
						perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa
						cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos
						sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
				</article>
				<!-- /Article -->


			</div>
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