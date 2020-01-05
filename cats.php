<?php 
/*
Template Name: Podopieczni
*/
?>
<?php get_header(); ?>

<div class="wrap-main">             
        <main>
            <div class="headings">
                <h2 class="title-main">Nasi podopieczni</h2>               
            </div>
            <?php while (have_posts()) : the_post(); ?>
<article> 
	<p class="category"><?php the_category(); ?></p>
	<h2> <?php the_title(); ?> </h2>
	<div class="info">
		<span><?php the_author(); ?></span>|
		<span><?php the_time('d-m-Y'); ?></span>
	</div>
	<p> <?php the_excerpt(); ?> </p>
	<a class="more" href="<?php the_permalink(); ?>"> Czytaj wiecej </a>
	<p class="comments"><?php comments_popup_link ('Brak komentarzy', 'Jeden komentarz', 'Komentarzy: %'); ?></p>
</article>
<?php endwhile; ?>
        </main>


<?php get_footer(); ?>
