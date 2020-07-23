</div>
	<footer>
		<div class="container">
			<div class="col-md-4 col-sm-6 col-xs-6 brand-footer">
				<img class="logo1" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 contact-footer">
				<h3>Contacto</h3>
				<ul class="contact-list">
					<li><i class="ico-contact fa fa-envelope"></i> ventas.motogar@gmail.com</li>
					<li><i class="ico-contact fa fa-phone"></i>  385 5169000</li>
					<li><i class="ico-contact fa fa-map-marker"></i> Av. Belgrano (s) 2710, <br> Saenz Peña 111, <br> Santiago del Estero (Capital).</li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="copy">
					<h4>© 2019 Motogar</h4>
					<p> 
Todos los derechos reservados. Imágenes de carácter ilustrativo. Motogar se reserva el derecho de, en cualquier momento, efectuar las alteraciones que juzgue necesarias en especificaciones y/o diseño de productos, independiente de comunicación previa.</p>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 right">
				<p>Desarrollo web: <strong><a target="blank" style="color:#ccc" href="http://www.emil.com.ar">Emil Gonzalez</a> </strong></p>

			</div>	
		</div>
	</footer>

	



<div id="fb-root"></div>

</div>
<div id="main-productos"  class="modal fade" tabindex="-80" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-header container">
			<h3>Productos</h3>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="material-icons">&#xE14C;</i>
				<span>Cerra</span>
			</button>
		</div>
	<div class="modalcont">
		<div class="container">
			<div class="col-md-2 col-sm-3 col-xs-4">
				<ul class="marcas-tab"  role="tablist">
					<li role="presentation" class="active"><a href="#tab-todas" aria-controls="home" role="tab" data-toggle="tab">Todas <br> las marcas</a><div class="triangulo"></div></li>
					<li><a href="#tab-honda" aria-controls="home" role="tab" data-toggle="tab">Honda</a><div class="triangulo"></div></li>
					<li><a href="#tab-kawasaki" aria-controls="home" role="tab" data-toggle="tab">Kawasaki</a><div class="triangulo"></div></li>
					<li><a href="#tab-yamaha" aria-controls="home" role="tab" data-toggle="tab">Yamaha</a><div class="triangulo"></div></li>
					<li><a href="#tab-suzuki" aria-controls="home" role="tab" data-toggle="tab">Bajaj</a><div class="triangulo"></div></li>
					<li><a href="#tab-mondial" aria-controls="home" role="tab" data-toggle="tab">Mondial</a><div class="triangulo"></div></li>
					<li><a href="#tab-zanella" aria-controls="home" role="tab" data-toggle="tab">Zanella</a><div class="triangulo"></div></li>
					<li><a href="#tab-motomel" aria-controls="home" role="tab" data-toggle="tab">Motomel</a><div class="triangulo"></div></li>
				</ul>

			</div>
			<div class="col-md-6 col-sm-5 col-xs-8">
				<div class="tab-content">
					<ul id="tab-todas" role="tabpanel" class="tab-pane active" >	
						<h4>Todas las marcas</h4>
						<li ><a href="<?php echo home_url('/'); ?>tipo/cub">Cub</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/street">Street</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/scooter">Scooter</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/sport">Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/super-sport">Super Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/custom">Custom</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/on-off">On-Off</a></li>
						
					</ul>
					<ul id="tab-honda" role="tabpanel" class="tab-pane">
						<div class="logomarca"><img type="image/svg+xml" src="<?php echo get_template_directory_uri(); ?>/images/marcas_honda.svg"></img></div>
						<li ><a href="<?php echo home_url('/'); ?>tipo/cub/?marca=honda">Cub</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/street/?marca=honda">Street</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/scooter/?marca=honda">Scooter</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/sport/?marca=honda">Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/super-sport/?marca=honda">Super Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/custom/?marca=honda">Custom</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/on-off/?marca=honda">On-Off</a></li>
					</ul>
					<ul id="tab-kawasaki" role="tabpanel" class="tab-pane">
						<div class="logomarca"><img type="image/svg+xml" src="<?php echo get_template_directory_uri(); ?>/images/marcas_kawasaki.svg"></img></div>
						<li ><a href="<?php echo home_url('/'); ?>tipo/cub/?marca=kawasaki">Cub</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/street/?marca=kawasaki">Street</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/scooter/?marca=kawasaki">Scooter</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/sport/?marca=kawasaki">Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/super-sport/?marca=kawasaki">Super Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/custom/?marca=kawasaki">Custom</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/on-off/?marca=kawasaki">On-Off</a></li>
						
					</ul>
					<ul id="tab-yamaha" role="tabpanel" class="tab-pane">
						<div class="logomarca"><img type="image/svg+xml" src="<?php echo get_template_directory_uri(); ?>/images/marcas_yamaha.svg"></img></div>
						<li ><a href="<?php echo home_url('/'); ?>tipo/cub/?marca=yamaha">Cub</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/street/?marca=yamaha">Street</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/scooter/?marca=yamaha">Scooter</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/sport/?marca=yamaha">Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/super-sport/?marca=yamaha">Super Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/custom/?marca=yamaha">Custom</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/on-off/?marca=yamaha">On-Off</a></li>
					</ul>
					<ul id="tab-suzuki" role="tabpanel" class="tab-pane">
						<div class="logomarca"><img type="image/svg+xml" src="<?php echo get_template_directory_uri(); ?>/images/marcas_bajaj.svg"></img></div>
						<li ><a href="<?php echo home_url('/'); ?>tipo/cub/?marca=bajaj">Cub</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/street/?marca=bajaj">Street</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/scooter/?marca=bajaj">Scooter</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/sport/?marca=bajaj">Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/super-sport/?marca=bajaj">Super Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/custom/?marca=bajaj">Custom</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/on-off/?marca=bajaj">On-Off</a></li>
						
					</ul>
					<ul id="tab-mondial" role="tabpanel" class="tab-pane">
						<div class="logomarca"><img type="image/svg+xml" src="<?php echo get_template_directory_uri(); ?>/images/marcas_mondial.svg"></img></div>
						<li ><a href="<?php echo home_url('/'); ?>tipo/cub/?marca=mondial">Cub</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/street/?marca=mondial">Street</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/scooter/?marca=mondial">Scooter</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/sport/?marca=mondial">Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/super-sport/?marca=mondial">Super Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/custom/?marca=mondial">Custom</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/on-off/?marca=mondial">On-Off</a></li>
					</ul>
					<ul id="tab-zanella" role="tabpanel" class="tab-pane">
						<div class="logomarca"><img type="image/svg+xml" src="<?php echo get_template_directory_uri(); ?>/images/marcas_zanella.svg"></img></div>
						<li ><a href="<?php echo home_url('/'); ?>tipo/cub/?marca=zanella">Cub</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/street/?marca=zanella">Street</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/scooter/?marca=zanella">Scooter</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/sport/?marca=zanella">Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/super-sport/?marca=zanella">Super Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/custom/?marca=zanella">Custom</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/on-off/?marca=zanella">On-Off</a></li>
					</ul>
					<ul id="tab-motomel" role="tabpanel" class="tab-pane">
						<div class="logomarca"><img type="image/svg+xml" src="<?php echo get_template_directory_uri(); ?>/images/marcas_motomel.svg"></img></div>
						<li ><a href="<?php echo home_url('/'); ?>tipo/cub/?marca=motomel">Cub</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/street/?marca=motomel">Street</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/scooter/?marca=motomel">Scooter</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/sport/?marca=motomel">Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/super-sport/?marca=motomel">Super Sport</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/custom/?marca=motomel">Custom</a></li>
						<li><a href="<?php echo home_url('/'); ?>tipo/on-off/?marca=motomel">On-Off</a></li>
					</ul>
				</div>
				
			</div><!-- termina tab panels -->
			<div class="col-md-3 col-sm-4 col-xs-12">
				<ul class="other-items">
					<li><a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Preguntas frecuentes</a></li>
					<li><a href="<?php echo home_url('/'); ?>solicitar"><i class="fa fa-credit-card" aria-hidden="true"></i> Solicitar Crédito</a></li>
					<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Posventa</a></li>
					<li><a href="#"><i class="fa fa-certificate" aria-hidden="true"></i> Acerca de nosotros</a></li>
					<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contacto</a></li>

				</ul>

				

			</div>
		
		</div>
	</div>
</div>	

<!-- scrpts -->
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/slick.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/script.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/tabs-to-select.js"></script>


<!-- bootstrap -->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/bootstrap/modal.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/bootstrap/tab.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/bootstrap/affix.js"></script>

	</body>
</html>