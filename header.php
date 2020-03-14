<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/styles.css"> 
	<?php wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>     
<body>
    <div id="menu-sign"><button id="menu-mobile-btn" class="btn btn-success">Menu <i class="fas fa-sort-down"></i></button>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>  
</div>
<header>
        <img src="<?php bloginfo('template_url'); ?>/img/mruczki.png" alt="dom tymczasowy warszawa" class="logo-header">
            <h1>mruczki.pl</h1>
        </header>
        <hr>
        <div id="menu-desktop">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>  
    
</div>
<div class="search-form-wrapper">
<form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo("url"); ?>">
     <div>
         <label class="screen-reader-text" for="inputSearch">Szukaj:</label>
         <input type="text" value="" name="s" id="inputSearch" />
         <input type="submit" id="searchsubmit" class="btn btn-info" value="Szukaj" />
     </div>
 </form>
 </div>  
