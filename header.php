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
    <?php wp_enqueue_script( 'comment-reply' ); ?>
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