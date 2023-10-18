
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
  <title>MotorsWeb</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
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

</head>

<body id="body">

<?php
	include("include-pag.php")
?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Nosotros</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Inicio</a></li>
						<li class="active">Nosotros</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about section">
	<div class="container">
		<div class="row">
			<h2 class="mt-40 text-center">MotorsWeb</h2>
			<div class="col-md-6">
				<h3 class="mt-40">Mision</h3>
				<p>Permitir que cada agencia de vehículos automotriz se de cuenta de el potencial de tener una plataforma web, les daría para llegar a muchas más partes de la ciudad de Bogotá, asimismo esperamos que los clientes se les facilite la obtención de mantenimientos y piezas de calidad que le pueden brindar estas agencias, de una manera fácil y poder llegar a un acuerdo incluso desde su propia casa.</p>
			</div>
			<div class="col-md-6">
				<h3 class="mt-40">Quienes somos</h3>
				<p>MotorsWeb va más allá al conectar a los entusiastas de los automóviles con talleres especializados, redefiniendo la adquisición de servicios y productos en este sector. Nuestra plataforma ofrece una experiencia única al proporcionar a los clientes acceso a una cuidadosamente seleccionada red de talleres confiables. A través de reseñas verificadas y calificaciones, simplificamos las decisiones, asegurando transparencia y confianza. Ya sea para el mantenimiento básico o la personalización avanzada, MotorsWeb brinda comodidad y excelencia en cada paso. Únete a nosotros para experimentar la convergencia perfecta entre innovación automotriz y satisfacción del cliente.
				</p>
			</div>
		</div>
		<!-- <div class="row mt-40">
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
		</div> -->
	</div>
</section>
<section class="team-members ">
	<div class="container">
		<div class="row">
			<div class="title"><h2>Miembros del equipo</h2></div>
		</div>
		<div class="row">
			<div class="col-md-2 espacio">
				<div class="team-member text-center">
					<img class="img-circle" src="../Cliensite/images/team/fotoDaniel.jpeg" style="height: 150px;">
					<h4>Daniel Pérez</h4>
					
				</div>
			</div>
			<div class="col-md-2 espacio" >
				<div class="team-member text-center">
					<img class="img-circle" src="../Cliensite/images/team/fotoEsclavo.jpeg" style="height: 150px;">
					<h4>Samuel Sanchez</h4>
					
				</div>
			</div>
			<div class="col-md-2 espacio">
				<div class="team-member text-center">
					<img class="img-circle" src="../Cliensite/images/team/fotoMancilla.jpeg" style="height: 150px;">
					<h4>Andes Mancilla</h4>
					
				</div>
			</div>
			<div class="col-md-2 espacio">
				<div class="team-member text-center">
					<img class="img-circle" src="../Cliensite/images/team/fotoMarica.jpeg" style="height: 150px;">
					<h4>Alejandro Ardila</h4>
					
				</div>
			</div>
			<div class="col-md-2 espacio">
				<div class="team-member text-center">
					<img class="img-circle" src="../Cliensite/images/team/fotoCoste.jpeg" style="height: 150px;">
					<h4>Juan Rubio</h4>
					
				</div>
			</div>
		</div>
	</div>
</section>


<!-- <div class="section video-testimonial bg-1 overly-white text-center mt-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Video presentation</h2>
				<a class="play-icon" href="https://www.youtube.com/watch?v=oyEuk8j8imI&amp;rel=0" data-toggle="lightbox">
					<i class="tf-ion-ios-play"></i>
				</a>
			</div>
		</div>
	</div>
</div> -->

<?php
	include("include-footer.php")
?>
    


  </body>
  </html>