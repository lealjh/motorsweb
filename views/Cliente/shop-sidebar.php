<?php
require_once("../../models/conexion.php");
require_once("../../models/consultas.php");
require_once("../../models/seguridadCliente.php");
require_once("../../controllers/mostrarInfoCliente.php");
?>


<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Motors Web</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="aviato" />
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../Cliensite/images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../Cliensite/plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../Cliensite/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
  
  <!-- Animate css -->
  <link rel="stylesheet" href="../Cliensite/plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../Cliensite/plugins/slick/slick.css">
  <link rel="stylesheet" href="../Cliensite/plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../Cliensite/css/style.css">
  <link rel="stylesheet" href="../Cliensite/css/styleLogin.css">

</head>

<body id="bodys">

<?php
	include("include-pag.php")
?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Repuestos</h1>
					<ol class="breadcrumb">
						<li><a href="home.php">incio</a></li>
						<li class="active">Repuestos</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="buscar">
	<div class="input">
			<form action="../../controllers/BuscarproductosCliente.php" method="POST">
			<input type="search" placeholder="Buscar" id="buscador" name="Buscar" >
			<button class="Buscar" type="submit">Buscar</button>
			</form>
	</div>
	<div id="resultado"></div>
</section>

<section class="products section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
				<div class="widget product-category">
					<h4 class="widget-title">Categorias</h4>
					<div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
					  	<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
						      	<h4 class="panel-title">
						        	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          	Repuestos internos
						        	</a>
						      	</h4>
						    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<ul>
									<li><a href="#!">Partes de motor</a></li>
									<li><a href="#!">Baterias</a></li>
									<li><a href="#!">Bujias</a></li>
									<li><a href="#!">Enfriadores de caja</a></li>
									<li><a href="#!">sensores</a></li>
									<li><a href="#!">Aire acondicionado</a></li>
									<li><a href="#!">Radiadores</a></li>
									<li><a href="#!">Sistemas de freno</a></li>
									<li><a href="#!">Amortiguadores</a></li>
									<li><a href="#!">Suspenciones</a></li>
								</ul>
							</div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					         	Repuestos Externos
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					    	<div class="panel-body">
					     		<ul>
									<li><a href="#!">Capo</a></li>
									<li><a href="#!">Llantas</a></li>
									<li><a href="#!">Parachoques</a></li>
									<li><a href="#!">Parabrisa</a></li>
									<li><a href="#!">Puertas</a></li>
									<li><a href="#!">Retrovisores</a></li>
									<li><a href="#!">Rines</a></li>
									<li><a href="#!">Farolas y Exploradoras</a></li>
									<li><a href="#!">Stop</a></li>
									<li><a href="#!"></a></li>
								</ul>
					    	</div>
					    </div>
					  </div>
					</div>
					
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					
					<?php
						mostrarProductosClientes()
					?>
			<!-- <div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-1.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">Reef Boardsport</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div> -->
			
		
		<!-- Modal -->
		<!-- <div class="modal product-modal fade" id="product-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="../Cliensite/images/shop/products/modal-product.jpg" alt="product-img" style="height: 300px;"/>
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
			        				<p class="product-price">$200</p>
			        				<p class="product-short-description">
			        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
			        				</p>
			        				<a href="cart.html" class="btn btn-main">Add To Cart</a>
			        				<a href="product-single.html" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div>  /.modal -->
					<?php
						modalProductos()
					?>

				</div>				
			</div>
		
		</div>
	</div>
</section>




<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.php">¿Tienes alguna queja?</a>
					</li>
					<li>
						<a href="shop-slidebar.html">REPUESTOS</a>
					</li>
					<li>
						<a href="#">POLITICAS DE PRIVACIDAD</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
	

    
    <!-- Main jQuery -->
    <script src="../Cliensite/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../Cliensite/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="../Cliensite/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="../Cliensite/plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="../Cliensite/plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="../Cliensite/plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="../Cliensite/plugins/slick/slick.min.js"></script>
    <script src="../Cliensite/plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="Cliensite/https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="../Cliensite/plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="../Cliensite/js/script.js"></script>
    


  </body>
  </html>
