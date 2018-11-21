<?php get_header('projects'); ?>

  <div class="projects__introwrapper">

        <?php $page_id = get_queried_object_id();
        if($page_id != 145) {
          echo "<h1 class='projects__bannertitle'>My Projects</h1>
          <h2 class='projects__bannersubtitle'>A list of the most interesting stuff I've worked on.</h2>";
        }
        else if ($page_id == 145) {
          echo "<h1 class='projects__bannertitle'>Mijn Portfolio</h1>
          <h2 class='projects__bannersubtitle'>Een lijst met de interessantste projecten waaraan ik heb gewerkt.</h2>" ;
        }
      
      ?>
  </div>

  <div class="projects__main">
    <div class="projects__articles">
      
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() ); 
      
      endwhile; endif;

      echo get_the_id();
      ?>

    </div>


    <aside class="sidebar">

        <?php 
        // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
        <?php if ( $wpb_all_query->have_posts() ) : ?>

        
        <!-- the loop -->
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
          <a href="#<?php the_title(); ?>"><?php the_title(); ?></a>
        <?php endwhile; ?>
        <!-- end of the loop -->
        

        <?php wp_reset_postdata(); ?>
 
        <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

    </aside>

  </div>

  <?php get_footer( 'projects') ?>