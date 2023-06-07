<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title><?php wp_title();?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">


    <?php wp_head();?>

</head>
<body>

<script>

    function menuMobile(){

        var menu = document.getElementById("menuMobile");


        if (menu.style.display === "flex" ) {

            menu.style.display = "none";

        } else {
            menu.style.display = "flex";

        }
    }

</script>
<header>

    <div class="mobileMenu">

        <i class="fa fa-bars" onclick="menuMobile()"></i>

        <div id="menuMobile">

            <?=
            wp_nav_menu(
                array( 'theme_location'=>'menu-principal',
                    'container_class'=>'menuMobile' )
            ); ?>

        </div>


    </div>

    <div class="cabecalho">

        <a href="<?= home_url() ?>" class="logo">

            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                echo '<img class="logoArea" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
                echo '<h1 class="logoArea">' . get_bloginfo('name') . '</h1>';
            }
            ?>

        </a>

        <div class="menu">

            <?=
            wp_nav_menu(
                array( 'theme_location'=>'menu-principal',
                       'container_class'=>'menuPrincipal' )
            ); ?>
        </div>
    </div>



</header>

<main>


