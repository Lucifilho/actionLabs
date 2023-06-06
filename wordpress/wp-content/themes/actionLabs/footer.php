</main>

<footer>

    <div class="rodape">

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

        <div class="bar"></div>

        <div class="copy">

           <span>&copy <?= date(format: "Y")?>. Todos os direitos reservados.</span>

        </div>
    </div>

</footer>

</body>
</html>