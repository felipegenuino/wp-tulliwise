
<?php 
  

  //$num_posts = ( is_front_page() ) ? 4 : 2;

$num_posts = 5;

  $args = array(
  	'post_type' => 'work', 
  	'posts_per_page' => $num_posts
  	);
  $query = new WP_Query($args);
  
 ?>

 
    <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('large-4 columns'); ?>>
          <header>

            <?php if ( has_post_thumbnail() ) : ?>
         <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( '', array('class' => 'th') ); ?>
           </a>
      <?php endif; ?>


           
           </header>
           
          <footer>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </footer>
        </article>


    <?php endwhile; endif; wp_reset_postdata(); ?>

