<?php get_header() ?>
<div class="wrap-category">
<?php while (have_posts()) : the_post(); ?>
<article> 
	<!-- <p class="category"><?php the_category(); ?></p> -->
	<h2 class="cat-name"> <?php the_title(); ?> </h2>
    <a href="<?php the_permalink(); ?>"><?php 
if ( has_post_thumbnail() ) {
the_post_thumbnail('thumbnail');
}?></a>
	<!-- <div class="info">
		<span><?php the_author(); ?></span>|
		<span><?php the_time('d-m-Y'); ?></span>
	</div> -->
	<p class='short-desc-cat'> <?php the_excerpt(); ?> </p>
	<a class="more btn btn-info" href="<?php the_permalink(); ?>"> Więcej informacji</a>
	<p class="comments"><?php comments_popup_link ('Brak komentarzy', 'Jeden komentarz', 'Komentarzy: %'); ?></p>
</article>
<?php endwhile; ?>
</div>
<?php get_footer() ?>