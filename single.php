<?php get_header(); ?>

<div class="container container-single">
<div class="row">
<div class="col-lg-12">
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<article> 
		<div class="info">
			<span class="category-single"><?php the_category(); ?></span>		
		</div>
		<!-- poniżej obrazek wyróżniający, którego za bardzo nie chce w opisie, wydaje mi się, że będzie przeszkadzał -->
        <!-- <?php 
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail');
            }?> -->
        
		<h2 class="cat-name"> <?php the_title(); ?> </h2>
		<p> <?php the_content(); ?> </p>
		<!-- getting comments -->
		<?php
//Pobieramy tylko zaakceptowane w panelu komentarze
$thispost = get_the_ID();
$args = array(
'status' => 'approve',
'post_id' => $thispost,
'orderby' => 'comment_date_gmt',
'order' => 'ASC',
);
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
if ( $comments ) {
foreach ( $comments as $comment ) {?>
   <div class="comment">
      <h4><a href="<?php echo comment_author_url(); ?>" rel="nofollow noopener noreferrer external" target="_blank"><?php comment_author(); ?></a></h4>
      <p><?php comment_date(); ?></p>
      <p class="comment-content"><?php echo $comment->comment_content; ?></p>
   </div>
<?php
}
} else {
echo 'Brak komentarzy.';
}
?>
<!-- end of getting comments -->
		<?php comments_template(); ?>
		<?php comment_form(); ?>
	</article>	
<?php endwhile; ?>

<div> 
	<div class="nav"> 
		<div class="next">
			<?php previous_posts_link('« Nowsze') ?>
		</div>
		<div class="prev">
			<?php next_posts_link('Starsze »') ?>
		</div>
	</div>
</div>

<?php else : ?>

	<h2> Nic nie znaleziono </h2>

<?php endif; ?>
</div>
</div>
</div>
		
		<?php get_footer(); ?>