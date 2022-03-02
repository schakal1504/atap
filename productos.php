<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>ATAP | Mineral | 
			<?php 
				echo  mb_strtoupper(substr($_GET["producto"], 0, 1)).substr($_GET["producto"], 1)
			?> 
		</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
                                <?php 
                                    $titleHeader = '<a href="index.php" class="logo"><strong>ATAP</strong> Agrosoluciones Tecnologicas y Agricolas de Puebla</a>';
                                    require "mvc/view/header.php";
                                ?>
							
							<!-- Banner -->
                                <?php 
                                    require "mvc/view/bannerProductos.php" ;
                                ?>

							<!-- Section -->
								<?php 
                                    require "mvc/view/sectionProductos.php" ;
                                ?>
								

							

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Busqueda" />
									</form>
								</section>

							<!-- Menu -->
                                <?php 
                                    require "mvc/view/menu.php" ;
                                ?>
								

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Blog</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Lo mas Relevante.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Noticias o mas relevante.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">Más</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contacto</h2>
									</header>
									<p>¿Mision / Vision?.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; ATAP. All rights reserved.
									 Design: <a href="https://html5up.net">SIByte</a>.</p>
								</footer>
						</div>
					</div>
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>