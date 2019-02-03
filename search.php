<?php get_header(); ?>
<body  <?php body_class(); ?> class="tp">

<div class="feature-list"> 
<div class="container">  
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h3>Resultados de búsqueda para:</h3> <h2>".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <div class="col-md-3">
        <div class="item">
          <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('thumbnail'); ?>
            
            <h3><?php the_title(); ?></h3>
            <span><?php echo do_shortcode('[types field="modelo"]'); ?></span>
            <span class="precio"><?php echo do_shortcode('[types field="precio"]'); ?></span>
            <span class="overlay">
              <i class="iconampliar"></i>
            </span>
          </a>
        </div>
  </div>  
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Sin resultados</h2>
        <div class="alert alert-info">
          <p>Lo sentimos, no se encontró resultados para su búsqueda, por favor, intentelo de nuevo con otras palabras claves. ¡Muchas gracias!</p>
        </div>
<?php } ?>

</div>
</div>
<?php include ('includes/tipos.php'); ?>
<?php include ('includes/marcas.php'); ?>
<?php get_footer(); ?>