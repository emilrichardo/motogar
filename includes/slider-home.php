<section id="slider" class="slider-container">
    
    <div class="slider-home">
      <?php 
              query_posts(array( 
                  'post_type' => 'productos',
                   'showposts' => 8,
                   
                   'tax_query' => array(
                      array(
                        'taxonomy' => 'destacado',
                        'field'    => 'slug',
                        'terms'    => 'slider-home',
                      ),
                    ),
                   
    
              ) );  
          ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="slide">
        <?php echo do_shortcode('[types field="imagen-slider"]'); ?>
        <a href="<?php the_permalink() ?>">
          <div class="text-slider">
            <p><?php $terms = get_the_terms( $post->ID , 'marca' );
              foreach ( $terms as $term ) {
              echo $term->name;}?> | 
              <span><?php the_title(); ?></span>
            </p>
            <span>
            <i class="material-icons">&#xE5C8;</i></span>
          </div>
        </a>
    </div>      
      <?php endwhile;?>
     </div>
     
  </section>