<?php

/* template name: Home */

get_header();

$fundo = get_the_post_thumbnail_url() ;

?>

<div class="featuredImage " style="background-image: url('<?= $fundo ?>')" >

    <div class="destaque">

        <div class="texto">

            <h1>
                <?php

                if (is_front_page()){

                    $titulo = the_title();

                }else{
                    $titulo = "";

                }
                ?>

            </h1>

        </div>


    </div>



</div>


<div class="indexPage">

    <div class="container">

        <ul class="artigos">

            <?php

        $artigosList = get_posts( array(

            'post_type'  => 'post',
            'posts_per_page' => 6,
            'order'          => 'ASC',
            'orderby'        => 'title'
        ) );

        if ( $artigosList ) {
            foreach ( $artigosList as $post ) :
                setup_postdata( $post );

                ?>

                <li class="noticia">

                    <div class="imagem">

                        <span class="category"><?= the_category() ?></span>

                        <img class="imgArtigo"  src="<?= the_post_thumbnail_url() ?>">


                    </div>



                    <div class="artigoTextos">

                        <h3 class="title3"><?php the_title(); ?></h3>
                        <span class="description"><?php the_excerpt(); ?></span>



                        <a href="<?php the_permalink($post); ?>" class="linkArtigo">Leia mais >></a>

                    </div>

                </li>

            <?php

            endforeach;
            wp_reset_postdata();
        }
        ?>

        </ul>


    </div>

</div>

<?php get_footer(); ?>
