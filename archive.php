<?php get_header(); ?><!-- HEADER ########################-->  


<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );  ?>
<section id="marca" class="<?php echo $term->slug; ?>">
   <div class="header-marca">
      <div class="container">
        <div class="col-md-6">
          <?php // include ('includes/marcas.php'); ?>
        </div>
        
        <h3><?php echo get_the_term_list( $post->ID, 'marca', '', ', ' ); ?>
      <?php echo $term->name; // will show the name ?></h3>

       
      </div>
    </div>


  <div class="container"> 
  
  <div class="col-md-6">

     <div class="select-header">
      
        <p><i class="fa fa-filter" aria-hidden="true"> </i> Tipo de moto:</p>
        <label>
          <ul  id="selects" class="nav nav-tabs type-select" role="tablist">
                <li role="presentation" class="active"><a href=".todas" aria-controls="home" role="tab" data-toggle="tab"> Todos</a></li>
                <li role="presentation" class="tipo"><a href=".cub" aria-controls="home" role="tab" data-toggle="tab">Cub</a></li>
                <li role="presentation" class="tipo"><a href=".street" aria-controls="home" role="tab" data-toggle="tab">Street</a></li>
                <li role="presentation" class="tipo"><a href=".scooter" aria-controls="home" role="tab" data-toggle="tab">Scooter</a></li>
                <li role="presentation" class="tipo"><a href=".sport" aria-controls="home" role="tab" data-toggle="tab">Sport</a></li>
                <li role="presentation" class="tipo"><a href=".super-sport" aria-controls="home" role="tab" data-toggle="tab">Super Sport</a></li>
                <li role="presentation" class="tipo"><a href=".custom" aria-controls="home" role="tab" data-toggle="tab">Custom</a></li>
                <li role="presentation" class="tipo"><a href=".on-off" aria-controls="home" role="tab" data-toggle="tab">On-Off</a></li>
              </ul>
              </label>
       </div>

     </div>
     <div class="col-md-4">
       <div class="select-header">
      
        <p><i class="fa fa-filter" aria-hidden="true"> </i> Marca:</p>
        <label>
          <ul  id="selects" class="nav nav-tabs type-select" role="tablist">
                <li role="presentation" class="active"><a href=".todas" aria-controls="home" role="tab" data-toggle="tab"> Todos</a></li>
                <li role="presentation" class="marca"><a href=".honda" aria-controls="home" role="tab" data-toggle="tab">Honda</a></li>
                <li role="presentation" class="marca"><a href=".kawasaki" aria-controls="home" role="tab" data-toggle="tab">Kawasaki</a></li>
                <li role="presentation" class="marca"><a href=".suzuki" aria-controls="home" role="tab" data-toggle="tab">Susuki</a></li>
                <li role="presentation" class="marca"><a href=".yamaha" aria-controls="home" role="tab" data-toggle="tab">Yamaha</a></li>
                <li role="presentation" class="marca"><a href=".mondial" aria-controls="home" role="tab" data-toggle="tab">Mondial</a></li>
                <li role="presentation" class="marca"><a href=".zanella" aria-controls="home" role="tab" data-toggle="tab">Zanella</a></li>
                <li role="presentation" class="marca"><a href=".motomel" aria-controls="home" role="tab" data-toggle="tab">Motomel</a></li>
              </ul>
              </label>
       </div>
  </div> 
  <br>
  <div class="clear"></div>

   

    <div class="feature-list tab-content"  id="myTabContent"> 
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


  


  <div  role="tabpanel" class="col-md-3 item-grid todas active tab-pane <?php   // Get terms for post
    $terms = get_the_terms( $post->ID , 'tipo' );
   // Loop over each item since it's an array
    if ( $terms != null ){
     foreach( $terms as $term ) {
   // Print the name method from $term which is an OBJECT
       print $term->slug ;
   // Get rid of the other data stored in the object, since it's not needed
       unset($term);
     } } ?> <?php   // Get terms for post
 $terms = get_the_terms( $post->ID , 'marca' );
 // Loop over each item since it's an array
 if ( $terms != null ){
 foreach( $terms as $term ) {
 // Print the name method from $term which is an OBJECT
 print $term->slug ;
 // Get rid of the other data stored in the object, since it's not needed
 unset($term);
} } ?>">
        <div class="item">
          <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail(array(150,150, true)); ?>
            <span><?php echo do_shortcode('[types field="modelo"]'); ?></span>
            <h3><?php the_title(); ?></h3>
            
            
            
            <?php echo do_shortcode('<span class="precio"><p><span>[types field="precio"]</span></p></span>'); ?>
            <span class="overlay">
              <i class="iconampliar"></i>
            </span>
          </a>
        </div>
  </div>      
<?php endwhile; ?>
</div>
<?php endif?> 
  </div>

</section>


     

         
     

     
    




     

<?php get_footer(); ?>