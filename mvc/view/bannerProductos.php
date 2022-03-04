<link rel="stylesheet" href="assets/css/productos.css" />
<section id="banner">
	<div class="content">
        <div class="row">
            <div class="col-4 col-12-small">
                <header class="major">
                    <a href="#" id="<?php echo mb_strtoupper($_GET["linea"]);?>">
                        <h2 class="titleBiotamex">BIOTAMEX</h2>
                    </a>
                </header> 
                <header>
                    <h3 class="subtitle<?php echo mb_strtoupper($_GET["linea"]);?>"><?php echo  mb_strtoupper($_GET["linea"]); ?> | <span><?php echo  mb_strtoupper($_GET["producto"]); ?> </span></h3>
                    <h5 class="titleBiotamex"><strong>FERTILIZACI&Oacute;N Y MEJORA DE SUELOS </strong></h5>
                </header> 

            </div> 
        
            <div class="col-8 col-12-small">
                <span class="image main"><img src="images/pic11.jpg" alt="" /></span>
            </div>
        </div> 
    </div>
</section>