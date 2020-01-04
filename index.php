<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mruczki - dom tymczasowy w Wawrze</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/styles.css"> 
<?php wp_head(); ?>  
</head>

<body>
    <div class="wrap-main">
        <div class="dropdown menu-top">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Menu
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">Podopieczni</button>
                <button class="dropdown-item" type="button">Strefa wiedzy</button>
                <button class="dropdown-item" type="button">Kontakt</button>
            </div>
        </div>

        <header>
            <img src="<?php bloginfo('template_url'); ?>/img/mruczki.png" alt="dom tymczasowy warszawa" class="logo-header">
            <h1>mruczki.pl</h1>
        </header>
        <hr>
        <main>
            <div class="headings">
                <h2 class="title-main">Dom tymczasowy</h2>
                <h2 class="title-main title-main-low">w Warszawie</h2>
            </div>
            <?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?> 
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?> 
            <p class="main-desc"><i class="fas fa-paw"></i><br>Dom tymczasowy prowadzę od kilku lat, dobro kotów jest
                dla mnie najwyższą wartością.
                Odkąd adoptowałam Lilkę, zakochałam się bez pamięci w tych cudownych stworzeniach, teraz pomagam
                bezdomnym kotom znaleźć kochający dom.
            </p>
            <div class="partners">
                <p class="hand-shake"><i class="fas fa-handshake"></i></p>
                <h2 class="title-footer">Partnerzy:</h2>
            </div>
        </main>
        <footer>

        </footer>

    </div>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
<?php wp_footer(); ?>
</body>

</html>