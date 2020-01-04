<?php get_header(); ?>       
        <hr>
        <main>
            <div class="headings">
                <h2 class="title-main">Dom tymczasowy</h2>
                <h2 class="title-main title-main-low">w Warszawie</h2>
            </div>
            <p>napisać dlaczego warto adoprować kota</p>            
            <p>napisać najważniejsze punkty umowy adopcyjnej</p>            
            <p class="main-desc"><i class="fas fa-paw"></i><br>Dom tymczasowy prowadzę od kilku lat, dobro kotów jest
                dla mnie najwyższą wartością.
                Odkąd adoptowałam Lilkę, zakochałam się bez pamięci w tych cudownych stworzeniach, teraz pomagam
                bezdomnym kotom znaleźć kochający dom.
            </p>
            <!-- w komencie skrypt wyświetlający artykuły -->
            <!-- <?php while (have_posts()) : the_post(); ?>
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
<?php endwhile; ?> -->
            <div class="partners">
                <p class="hand-shake"><i class="fas fa-handshake"></i></p>
                <h2 class="title-footer">Partnerzy:</h2>
            </div>
        </main>  
        <?php get_footer(); ?>