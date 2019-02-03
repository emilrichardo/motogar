<?php get_header(); ?><!-- HEADER ########################-->  
<body  <?php body_class(); ?>>
	<div class="wrapper" id="wrapper">
	

 		<!-- contenido de pagina ########################-->
 		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 		 




 		<section class="single-intro">


      
      <div class="container">
        <h5><?php echo do_shortcode('[types field="antetitulo"]'); ?></h5>
        <h1><?php the_title(); ?></h1>
        <h5>Publicado: <span class="dia"><?php the_time('j'); ?></span>
           <span class="mes"><?php the_time('M'); ?></span>
           <span class="anio"><?php the_time('Y'); ?></span></h5>
        <p class="bajada"><?php echo do_shortcode('[types field="bajada"]'); ?></p>
        
        <?php the_content ();?>
      </div> <!-- termina content-->

    </section>


 		

 		
 		
 		<?php endwhile ;?>
		<?php endif ;?>
 		<!-- ######################## termina contenido de pagina -->



<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

