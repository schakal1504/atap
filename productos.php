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
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
										<h2>Contacto</h2>
									</header>
									<p>¿Mision / Vision?.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope linkCorreo" ><a href="#">information@untitled.tld</a></li>
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
			<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Correo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  		<div class="mb-3">
              <label class="col-form-label">Tu Correo:</label>
              <input type="email" class="form-control" id="correo_usuario" />
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Mensaje:</label>
              <textarea class="form-control" id="mensaje"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/site.js"></script>

	</body>
</html>