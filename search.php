<?php get_header(); ?>
<?php global $post;
$args = array( 's' => esc_html( get_search_query( false ) ), 'posts_per_page' => 32 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<div class="wrap-category search-page">
        <a href="<?php the_permalink(); ?>"><h3 class="search-result-title"><?php the_title(); ?></h3></a>
        <div class="search-category"><?php the_category(); ?></div>
        <div class="search-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php 
if ( has_post_thumbnail() ) {
the_post_thumbnail('thumbnail');
}?></a>
</div>
       </div>
<?php endforeach;
 wp_reset_postdata();?>

<?php get_footer(); ?>