<?php get_header(); ?><!-- HEADER ########################-->  
<body  <?php body_class(); ?> class="tp">



  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	
<div class="banner-pro">
    
    <?php echo do_shortcode('[types field="banner-encabezado"]'); ?>
    <div class="logo-producto">
      <?php echo do_shortcode('[types field="logo-producto"]'); ?>
    </div>
    
  </div>


  <section id="top-producto">
    <div class="container">

      <ul class="list-colors">
        <p>Colores:</p> 
        <li> <span  style="background:
        <?php // echo do_shortcode('[types field="colores"][/types]'); ?>

        <?php echo(types_render_field( 'colores', array( 'separator' => '"></li><li><span style="background:' ) )); ?>
        
      ">
    </li>
       
      
      </ul>
       
         
          
        
        
 

      <div class="col-md-6">
        <div class="slider-pro">
          <?php the_post_thumbnail('medium'); ?>
          <?php echo do_shortcode('[types field="galeria-de-fotos"]'); ?>         
        </div>
        <div class="slider-featurepro">
          <?php the_post_thumbnail('thumbnail'); ?>
          <?php echo do_shortcode('[types field="galeria-de-fotos" resize="crop" height="70" width="100"]'); ?>         
        </div>

        <div class="arrows-pro">
          <div class="prev"><span class="fa fa-angle-left"></span><span class="sr-only">Prev</span></div>
        <div class="next"><span class="fa fa-angle-right"></span><span class="sr-only">Next</span></div>
        </div>
        

      </div>
      <div class="detail col-md-6">
        <h3> 
          <?php echo get_the_term_list( $post->ID, 'marca', '', ', ' ); ?>
          
        </h3>
        <h1><?php the_title(); ?></h1>
        <p><?php echo do_shortcode('<strong>Modelo:</strong> [types field="modelo"]'); ?> <?php echo get_the_term_list( $post->ID, 'tipo', '| <strong>Tipo:</strong> ', ', ' ); ?></p>
        
        <h4 class="precio"><?php echo do_shortcode('[types field="precio"]'); ?></h4>
        
        <p><?php the_excerpt(); ?></p>

        <div class="botones">
          <a class="btn btn-azul" href="#">Ficha técnica</a>
          <a class="btn btn-green" href="#cotizacion">Cotizar</a>

        </div>

      </div>
      
    </div>
  </section>
  
  <?php endwhile ;?>
    <?php endif ;?>


  <section id="cotizacion" >

    <div class="container">
      <div class="col-md-3 cotizacion-intro">
        <h3>Cotizar</h3>
        <h4><?php the_title(); ?></h4>
        
        <h4><i class="fa fa-refresh" aria-hidden="true"></i> 24 hs</h4>
        <p class="text-cot2">Esperamos tu consulta. Obtendrás una respuesta dentro de las 24hs. <span>¡Garantizado!</span></p>
        <span>(*) campos requeridos</span>
      </div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="form-cotizacion col-md-6">
        
        <?php echo do_shortcode('[contact-form-7 id="35" title="Cotizacion rápida"]'); ?>
         
      </div>
      
      <?php endwhile ;?>
    <?php endif ;?>
      
    </div>
  </section>

  


<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

