<!doctype html>

<html lang="es">

<head>

	<meta charset="utf-8">

	<title><?php bloginfo('name'); ?>    <?php wp_title('|',true);?></title>



	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="Motovehiculos" content="The HTML5 Herald">

	<meta property="og:title" content="<?php the_title(); ?>" />

    <meta property="og:image" content="<?php echo $thumbSrc; ?>" />

  

	<!-- estilos -->

	<link rel="stylesheet" title="style"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />



  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css"> 

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/grid.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/modal.css">



  <!-- slider css -->

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/slick.css">













  <!-- FUENTES -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"

      rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">



  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">



<script Language="JavaScript"> 

function DameLaFechaHora() { 

var hora = new Date() 

var hrs = hora.getHours(); 

var min = hora.getMinutes(); 

var hoy = new Date(); 

var m = new Array(); 

var d = new Array() 

var an= hoy.getYear(); 

m[0]="Enero"; m[1]="Febrero"; m[2]="Marzo"; 

m[3]="Abril"; m[4]="Mayo"; m[5]="Junio"; 

m[6]="Julio"; m[7]="Agosto"; m[8]="Septiembre"; 

m[9]="Octubre"; m[10]="Noviembre"; m[11]="Diciembre"; 

document.write("Enviado a las "+hrs+":"+min+" ("); 

document.write(hoy.getDate()); 

document.write(" de "); 

document.write(m[hoy.getMonth()]); 

document.write(")"); 

} 

</script> 



<!-- Cambiar el color por #101116 -->

<meta name="theme-color" content="#101116">



<?php wp_head(); ?>

<script>var $ = jQuery.noConflict();</script>



<script async src="//"></script>

<script>

  (adsbygoogle = window.adsbygoogle || []).push({

    google_ad_client: "ca-pub-3214473331108016",

    enable_page_level_ads: true

  });

</script>





</head>



<body <?php body_class(); ?>>



	<div class="wrapper">

	

	<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>





<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>



	



	<!-- Encabezado -->

	<header role="navigation" data-spy="affix" data-offset-top="20">

		<!-- Barra superior -->

	<div class="topnav">		

		<div class="container">

			<div class="col-md-3 col-sm-4 col-xs-4 tnw">			

				<i class="fa fa-whatsapp" aria-hidden="true"></i>

				<span><a href="https://api.whatsapp.com/send?phone=3855169000&text=Hola%20quiero%20info"> 385 5169000</a></span>			

			</div>

			<div class="col-md-3 col-sm-4 col-xs-4">

				<i class="material-icons">&#xE158;</i>
				<a href="mailto:ventas.motogar@gmail.com"><span>ventas.motogar@gmail.com</span> </a>

								



			</div>

			<div class="col-md-3 col-sm-4 col-xs-4">

				<i class="material-icons">&#xE55F;</i>

				<span>Av. Belgrano 2710, Sgo del estero.</span>

			</div>

			<div class="col-md-3 col-sm-0">

				<form class="buscar" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

				<label class="search-topnav">

					<input type="text" is="core-input" id="searchBox" placeholder="Buscar modelo" flex="" name="s" flex="" aria-label="Search" value="<?php echo get_search_query() ?>" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">

					<i class="fa fa-search" aria-hidden="true"></i>

				</label>

				</form>

			</div>

			

		</div>

	</div>

		<div class="container">

			<div id="brand" class="logo col-md-2 col-xs-5">

				<a href="<?php echo home_url('/'); ?>">

					<img class="logo1" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">

					<span><h1>MotoGar<small>.com.ar</small></h1></span></a>

			</div>

			<a  href="#main-productos" data-toggle="modal" class="buttom-main all-trans">

				<span>Menú</span><i class="fa fa-bars " aria-hidden="true"></i>

			</a>

			<nav id="main" class="col-md-10" >

				<ul class="menu">

					<li><a href="<?php echo home_url('/'); ?>">Inicio</a></li>

					<li><a href="#main-productos" data-toggle="modal">Productos</a></li>					

					<li><a target="blank" href="https://cotizador.creditouniversal.com.ar/WebUI/#/Consulta/UV24914">Financiar</a></li>

				</ul>

				<a class="btn-red btn" href="#cotizacion">Cotización rápida</a>

			</nav>			

		</div>

	</header>



	<div class="cont">