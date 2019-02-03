<?php get_header(); ?><!-- HEADER ########################-->  
<body  <?php body_class(); ?> >



  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	



  <section id="top-producto">
    <div class="container">

      
       
         
         <h1><?php the_title(); ?></h1> 
        <?php the_content ();?>
      
      
    </div>
  </section>
  
  <?php endwhile ;?>
    <?php endif ;?>


  

  


<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

