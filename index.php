<?php
/*
Jonna Nöjd
Projektarbete i dt197g Mittuniversitetet 2022
*/
get_header(); ?>
<!--Huvudinnehåll-->
<div class="maincontent wrapper noheaderimage">
    <section class="page">

        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
            }
        }
        ?>

        <article>
            <h1><?php the_title(); ?></h1>
            <div class="line"></div>
            <?php the_content();
            if (has_post_thumbnail()) {
                the_post_thumbnail('landscape', array('class' => 'center-thumb'));
            } ?>
        </article>
    </section>
</div>


<?php get_footer(); ?>