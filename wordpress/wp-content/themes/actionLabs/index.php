<?php

/* template name: Home */

get_header();
?>

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

                    <img class="imgArtigo"  src="<?= the_post_thumbnail_url() ?>">


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
