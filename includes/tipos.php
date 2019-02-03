<section id="search">
		<div class="container">
			<div class="col-md-7">
                  


              

              <form class="buscar" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<label class="border">
					<input type="text" is="core-input" id="searchBox" placeholder="Buscar modelo" name="s" flex="" aria-label="Search" value="<?php echo get_search_query() ?>" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
					<i class="fa fa-search" aria-hidden="true"></i>
				</label>
				</form>
			</div>
			<div class="btn-group col-md-5 right">
				<a class="btn btn-azul btn-small" href="#">Alta CC</a>
				<a class="btn btn-azul btn-small" href="#">Media CC</a>
				<a class="btn btn-azul btn-small" href="#">Baja CC</a>
			</div>			
		</div>
	</section>


	<section id="type">
		
			<div class="container">
				<div class="col-md-12 center">
					<h2>Tu personalidad sobre dos ruedas</h2>
				</div>		
			</div>
		
		<div class="container center-aligned">
			
				<ul class="type-main">

						<li>Cub</li>
						<li>Street</li>
						<li>Scooter</li>
						<li>Sport</li>
						<li>SuperSport</li>
						<li>Custom</li>
						<li>OnOff</li>
						
					</ul>
			

			<div class="slider-type">
				
				<div class="slide" data-thumb="static/type.png" name="primer-slider">
					<div class="col-md-7 col-sm-8 col-xs-8">
						<div class="image-bg"><img src="<?php echo get_template_directory_uri(); ?>/static/type-01.png"></div>
						<span class="moto">
							<img src="<?php echo get_template_directory_uri(); ?>/static/honda-biz.png">
						</span>					
					</div>
					<div class="col-md-4 desc">
						<h3>Inteligente</h3>
						<p>Las CUBS (o underbones en ingles) son motos pequeñas con un espacio o step en el cuadro, descendiente de la original Honda Super Cub. Estas se diferencian de los scooters por sus ruedas mas grandes y por el uso de pedalines en lugar del piso apoyapie interior del scooter.</p>

						<a class="btn btn-border" href="<?php echo home_url('/'); ?>tipo/cub">Ver modelos <span>Cub</span> <i class="fa fa-caret-right right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="slide" data-thumb="static/type.png" name="primer-slider">
					<div class="col-md-7 col-sm-8 col-xs-8">
						<div class="image-bg"><img src="<?php echo get_template_directory_uri(); ?>/static/type-01.png"></div>
						<span class="moto">
							<img src="<?php echo get_template_directory_uri(); ?>/static/yamaha-fz.png">
						</span>					
					</div>
					<div class="col-md-4 desc">
						<h3>Dinámico</h3>
						<p>Las motos de calle son aquellas diseñadas para ser conducidas en rutas pavimentadas. Se caracterizan por cubiertas lisas con dibujos suaves y motores generalmente en el orden de los 125cc para arriba. La mayoria son capaces de velocidades de hasta 160 km/h y muchas llegando a los 200 km/h (en las de mayor cilindrada).</p>

						<a class="btn btn-border" href="<?php echo home_url('/'); ?>tipo/street/">Ver modelos <span>Street</span> <i class="fa fa-caret-right right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="slide" data-thumb="static/type.png" name="primer-slider">
					<div class="col-md-7 col-sm-8 col-xs-8">
						<div class="image-bg"><img src="<?php echo get_template_directory_uri(); ?>/static/type-01.png"></div>
						<span class="moto">
							<img src="<?php echo get_template_directory_uri(); ?>/static/honda-elite125.png">
						</span>					
					</div>
					<div class="col-md-4 desc">
						<h3>Vintage</h3>
						<p>Los Scooters tienen motores de un rango mas chico que el de una moto, que pueden ir entre los 50 a 650cc, y tienen tienen todo un chasis que las hace mas limpias en su forma y silenciosas que las motos. Ademas tienen mayor espacio interior para apoyar los pies, quedando los mismos protegidos y en una posicion como sentado en una silla. </p>

						<a class="btn btn-border" href="<?php echo home_url('/'); ?>tipo/scooter">Ver modelos <span>Scooter</span> <i class="fa fa-caret-right right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="slide" data-thumb="static/type.png" name="primer-slider">
					<div class="col-md-7 col-sm-8 col-xs-8">
						<div class="image-bg"><img src="<?php echo get_template_directory_uri(); ?>/static/type-01.png"></div>
						<span class="moto">
							<img src="<?php echo get_template_directory_uri(); ?>/static/kawasaki-versys650.png">
						</span>					
					</div>
					<div class="col-md-4 desc">
						<h3>Deportivo</h3>
						<p>Las motos sport se centran en la velocidad, aceleracion, frenado y doblado en ruta pavimentada, tipicamente a expensas del confort y la economia de combustible en comparacion de motos menos especializadas. Debido a esto, hay ciertos elementos de diseño caracteristicos de estas motos. Las mismas tienen motores de alta performance dentro de cuadros livianos de materiales especiales. </p>

						<a class="btn btn-border" href="<?php echo home_url('/'); ?>tipo/sport">Ver modelos <span>Sport</span> <i class="fa fa-caret-right right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="slide" data-thumb="static/type.png" name="primer-slider">
					<div class="col-md-7 col-sm-8 col-xs-8">
						<div class="image-bg"><img src="<?php echo get_template_directory_uri(); ?>/static/type-01.png"></div>
						<span class="moto">
							<img src="<?php echo get_template_directory_uri(); ?>/static/kawasaki-ninjazx.png">
						</span>					
					</div>
					<div class="col-md-4 desc">
						<h3>Apasionado</h3>
						<p>La categoria supersport es la que incluye motos que se puede decir, son salidas casi directamente de las pistas de competencia para ser usadas por los mas osados pilotos en la calle.
</p>

						<a class="btn btn-border" href="<?php echo home_url('/'); ?>tipo/super-sport/">Ver modelos <span>S-Sport</span> <i class="fa fa-caret-right right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="slide" data-thumb="static/type.png" name="primer-slider">
					<div class="col-md-7 col-sm-8 col-xs-8">
						<div class="image-bg"><img src="<?php echo get_template_directory_uri(); ?>/static/type-01.png"></div>
						<span class="moto">
							<img src="<?php echo get_template_directory_uri(); ?>/static/kawasaki-vulcan.png">
						</span>					
					</div>
					<div class="col-md-4 desc">
						<h3>Aventurero</h3>
						<p>Las Custom son mayormente proyectos de customizacion de una moto que consisten en reconfigurar la moto para hacerla mas a gusto de su dueño y con una configuracion usualmente donde prima la menor cantidad de accesorios para darle una linea mas suave a la moto. Originalmente se estiraba la horquilla para que la moto quede mas larga</p>

						<a class="btn btn-border" href="<?php echo home_url('/'); ?>tipo/custom/">Ver modelos <span>Custom</span> <i class="fa fa-caret-right right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="slide" data-thumb="static/type.png" name="primer-slider">
					<div class="col-md-7 col-sm-8 col-xs-8">
						<div class="image-bg"><img src="<?php echo get_template_directory_uri(); ?>/static/type-01.png"></div>
						<span class="moto">
							<img src="<?php echo get_template_directory_uri(); ?>/static/kawasaki-kx450f.png">
						</span>					
					</div>
					<div class="col-md-4 desc">
						<h3>Intrepido</h3>
						<p>On-Off es una categoría de motos para calle (on road)que tambien estan diseñadas y preparadas para entrar en caminos (off-road). Tipicamente estan basadas en chasis de motos enduro se les agregan luces, espejos, señales e instrumental que les permiten ser legales para transitar por rutas de asfalto normales.</p>

						<a class="btn btn-border" href="<?php echo home_url('/'); ?>tipo/on-off">Ver modelos <span>OnOff</span> <i class="fa fa-caret-right right" aria-hidden="true"></i></a>
					</div>
				</div>
				
				
			</div>	<!-- finaliza slider type -->		
			
		</div>
	</section>