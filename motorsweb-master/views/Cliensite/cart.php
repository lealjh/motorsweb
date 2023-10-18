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
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<section class="top-header">
    <div class="container justify-content-between">
        <div class="row">
            <div class="col-md-4  col-xs-12 col-sm-4 text-center">
                <p>"Potencia tu auto con repuestos de calidad. Encuentra lo que necesitas para seguir en camino."</p>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Site Logo -->
                <div class="logo text-center">
                    <a href="home.php">
                        <img  src="../Cliensite/images/logo.png" alt="" style="width: 160px;    height: 50px;">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Cart -->
                <ul class="top-menu text-right list-inline">
                        <li class="dropdown cart-nav dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                    class="tf-ion-android-cart"></i></a>
                            <div class="dropdown-menu cart-dropdown">
                                <!-- Cart Item -->
                                <div class="media">
                                    <a class="pull-left" href="#!">
                                        <img class="media-object" src="Uploads/Productos/in1.png"
                                            alt="image" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#!">repuestos</a></h4>
                                        <div class="cart-price">
                                            <span>pal carro</span>
                                            <span>25000</span>
                                        </div>
                                        <h5><strong>$25000</strong></h5>
                                    </div>
                                    <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
                                </div><!-- / Cart Item -->
                                <!-- Cart Item -->
                                <div class="media">
                                    <a class="pull-left" href="#!">
                                        <img class="media-object" src="Uploads/Productos/Cambiodeaceite.png"
                                            alt="image" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#!">aceitico</a></h4>
                                        <div class="cart-price">
                                            <span>aceitico hermano</span>
                                            <span>20000</span>
                                        </div>
                                        <h5><strong>$50000</strong></h5>
                                    </div>
                                    <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
                                </div><!-- / Cart Item -->

                                <div class="cart-summary">
                                    <span>Total</span>
                                    <span class="total-price">$75000</span>
                                </div>
                                <ul class="text-center cart-buttons">
                                    <li><a href="../Cliensite/cart.php" class="btn btn-small">View Cart</a></li>
                                    <li><a href="views/Cliensite/checkout.html"
                                            class="btn btn-small btn-solid-border">Checkout</a></li>
                                </ul>
                            </div>

                        </li><!-- / Cart -->

                    <!-- Search -->
                    <li class="dropdown search dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                class="tf-ion-ios-search-strong"></i> Buscar</a>
                        <ul class="dropdown-menu search-dropdown">
                            <li>
                                <form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
                            </li>
                        </ul>
                    </li><!-- / Search -->



                </ul><!-- / .nav .navbar-nav .navbar-right -->
            </div>
        </div>
    </div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
    <nav class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
                <h2 class="menu-title">Main Menu</h2>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- / .navbar-header -->

            <!-- Navbar Links -->
            <div id="navbar" class="navbar-collapse collapse text-center">
                <ul class="nav navbar-nav">

                    <!-- Home -->
                    <li class="hoverred">
                        <a href="../../index.php">Inicio</a>
                    </li>
                    <!-- / Home -->

                    <li class="dropdown width:130px dropdown-slide hoverred">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                            role="button" aria-haspopup="true" aria-expanded="false">Talleres<span
                                class="tf-ion-ios-arrow-down"></span></a>
                        <div class="dropdown-menu">
                            <div class="row">

                                <!-- Servicios -->
                                <div class="col-sm-12 col-xs-6">
                                    <ul>
                                        <li class="dropdown-header">Servicios</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Service.php">Mecanica automotriz <br> General</a></li>
                                        <li><a href="llanteras.php">Llanteras</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown width:130px dropdown-slide hoverred">
                        <a href="shop-sidebar.php" >Repuestos<span ></span></a>
                        
                    </li>
                                

                    <!-- Pages -->
                    <!-- <li class="dropdown full-width dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                            role="button" aria-haspopup="true" aria-expanded="false">Mi taller <span
                                class="tf-ion-ios-arrow-down"></span></a>
                        <div class="dropdown-menu">
                            <div class="row"> -->

                                <!-- Introduction -->
                                <!-- <div class="col-sm-6 col-xs-12">
                                    <ul>
                                        <li class="dropdown-header">Introduction</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </div> -->

                                <!-- Contact -->
                                <!-- <div class="col-sm-6 col-xs-12">
                                    <ul>
                                        <li class="dropdown-header">Dashboard</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="dashboard.html">User Interface</a></li>
                                        <li><a href="order.html">Orders</a></li>
                                        <li><a href="address.html">Address</a></li>
                                        <li><a href="profile-details.html">Profile Details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    
                    <li class="hoverred">
                        <a href="about.php">Informacion del sitio</a>
                    </li>
                    <!-- inicio de sesion -->
                    <li class="dropdown dropdown-slide hoverred">
                        
                            
                    </li><!-- / inisio de sesion -->

                    <!-- Registro -->
                    <li class="dropdown width:130px dropdown-slide hoverred">
                        <a href="#!" class="sidebar-sub-toggle"   data-delay="350"
                            role="button" aria-haspopup="true" aria-expanded="false">Perfil
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="row">

                                <!-- Servicios -->
                                <div class="col-sm-12 col-xs-6" style="text-align: center;">
                                    
                                </div>
                            </div>
                        </div>
                    </li><!-- / Registo -->

                </ul><!-- / .nav .navbar-nav -->

            </div>
            <!--/.navbar-collapse -->
        </div><!-- / .container -->
    </nav>
</section>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h1 class="page-name">Carrito</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">inicio</a></li>
                        <li class="active">carrito</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">nombre del producto</th>
                      <th class="">precio</th>
                      <th class="">acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="">
                      <td class="">
                        <div class="product-info">
                          <img width="80" src="../../Uploads/Productos/Cambio de aceite1.jpg" alt="" />
                          <a href="#!">Aceitico</a>
                        </div>
                      </td>
                      <td class="">$200.000</td>
                      <td class="">
                        <a class="product-remove" href="#!">Remove</a>
                      </td>
                    </tr>
                    <tr class="">
                      <td class="">
                        <div class="product-info">
                          <img width="80" src="../../Uploads/Productos/Revisarlasuspencion.jpg" alt="" />
                          <a href="#!">Aire</a>
                        </div>
                      </td>
                      <td class="">$200.00</td>
                      <td class="">
                        <a class="product-remove" href="#!">Remove</a>
                      </td>
                    </tr>
                    <tr class="">
                      <td class="">
                        <div class="product-info">
                          <img width="80" src="../../Uploads/Productos/gorjeo.png" alt="" />
                          <a href="#!">calca twitter</a>
                        </div>
                      </td>
                      <td class="">$500.000</td>
                      <td class="">
                        <a class="product-remove" href="#!">Remove</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <a href="checkout.php" class="btn btn-main pull-right">Checkout</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


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
                    <li>
                        <a href="https://www.twitter.com/themefisher">
                            <i class="tf-ion-social-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/themefisher/">
                            <i class="tf-ion-social-pinterest"></i>
                        </a>
                    </li>
                </ul>
                <ul class="footer-menu text-uppercase">
                    <li>
                        <a href="contact.html">CONTACT</a>
                    </li>
                    <li>
                        <a href="shop.html">SHOP</a>
                    </li>
                    <li>
                        <a href="pricing.html">Pricing</a>
                    </li>
                    <li>
                        <a href="contact.html">PRIVACY POLICY</a>
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
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>