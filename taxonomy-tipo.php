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
  <div class="col-md-6 title-tax">
    <h3><?php echo get_the_term_list( $post->ID, 'tipo', '', ', ' ); ?>
      <?php // echo $term->name; // will show the name ?></h3>
  </div> 
  <div class="col-md-6 right">

     <div class="select-header">
      
        <p><i class="fa fa-filter" aria-hidden="true"> </i> Filtrar por marca:</p>
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
            <?php the_post_thumbnail('thumbnail'); ?>
            <span><?php $terms = get_the_terms( $post->ID , 'marca' );
              foreach ( $terms as $term ) {
              echo $term->name;}?></span>
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