<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/grid.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/cursos.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsivo.css">
    <title>Stakato - Início</title>
    <?php wp_head(); ?>
</head>
<body>
    
    <header class='header'>
        <div class='container'>
            <a href='/' class='grid-2 logo' >
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/home/header/logomenor.svg" alt="">
            </a>
            <nav class='grid-14 header_menu'>
                <ul>
                    <li><a href="/"  class='ativo'>Início</a></li>
                    <li><a href="cursos">Cursos</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>