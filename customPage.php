<?php
/*
 * Template Name: A Static Page
 */
get_header(); ?>

<div class="wrap-category custom-page">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <h2 class="title-custom"><?php the_title(); ?></h2>
         <div>
           <?php the_content(); ?>
         </div>
  <?php endwhile; endif; ?>
 </div>

<?php get_footer(); ?>