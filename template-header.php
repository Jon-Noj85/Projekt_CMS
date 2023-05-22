<?php
/*
Template Name: Sida med header-bild
*/
/*
Jonna Nöjd
Projektarbete i dt197g Mittuniversitetet 2022
*/
get_header();
?>

<!--Banner-bild-->
<div id="banner-image">
    <img src="<?= get_template_directory_uri(); ?>/images/header.jpg" alt="" />
    <h1><?php bloginfo('name'); ?></h1>
</div>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>
<!--Huvudinnehåll -->
<div class="maincontent wrapper">
    <section class="page-section">
        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <h2><?php the_title(); ?></h2>
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