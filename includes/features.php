<!-- section productos destacados -->
	<section id="features">		
		<div class="encabezado">
			<div class="container">
				<div class="col-md-7 col-sm-6 col-xs-6">
					<h2>
					<i class="material-icons">&#xE885;</i>
					Productos destacados
					<span class="triangulo"></span>
					</h2>
				</div>
				<!-- <div class="col-md-5 col-sm-6 right col-xs-6">
					<a href="#" class="btn btn-border right">Ver todos los productos <i class="fa fa-plus-square right" aria-hidden="true"></i></a>
				</div> -->
								
			</div>
		</div> <!-- termina encabezado -->
		
		<div class="container container-list">
			<?php 
              query_posts(array( 
                  'post_type' => 'productos',
                   'showposts' => 16,
                   
                   'tax_query' => array(
                      array(
                        'taxonomy' => 'destacado',
                        'field'    => 'slug',
                        'terms'    => 'producto-destacado',
                      ),
                    ),
                   
    
              ) );  
          ?>
   

		<div class="feature-list feature-slider"> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-3">
				<div class="item">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail( array(300,200, true)); ?>
						<span><?php $terms = get_the_terms( $post->ID , 'marca' );
              foreach ( $terms as $term ) {
              echo $term->name;}?></span>
						<h3><?php the_title(); ?></h3>
						<span class="precio"></span>
						<span class="overlay">
							<i class="iconampliar"></i>
						</span>
					</a>
				</div>
			</div>
			<?php endwhile;?>
		</div>
		
		</div> <!-- termina feature list -->

		<div class="container center">
			<div class="control-arrows">
			<div class="container">
				<span class="prev"><i class="material-icons">&#xE5CB;</i></span>
			<span class="next"><i class="material-icons">&#xE5CC;</i></span>
			</div>
			
		</div>	
		<div>
			<a href="<?php echo home_url('/'); ?>productos" class="btn btn-green right">Ver todos los productos <i class="fa fa-plus-square right" aria-hidden="true"></i></a>
		</div>

		<div class="banner">
			<div class="center">
				<img src="<?php echo get_template_directory_uri(); ?>/static/banner.jpg">

			</div>			
		</div>
		</div>

		
				
		
	</section><!-- termina feature -->