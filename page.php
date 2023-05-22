<?php get_header();
/*
Jonna Nöjd
Projektarbete i dt197g Mittuniversitetet 2022
*/

if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>
<!--Huvudinnehåll för enskilda sidor-->
<div class="maincontent wrapper noheaderimage">
    <section class="page-section">
        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <h1><?php the_title(); ?></h1>
                <div class="line"></div>
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('landscape', array('class' => 'center-thumb'));
                }
                ?>
                <article>
            <?php
                the_content();
            }
        }
            ?>
                </article>
    </section>
</div>

<?php get_footer(); ?>