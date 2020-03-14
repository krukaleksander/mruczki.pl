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