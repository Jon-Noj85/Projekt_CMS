<?php
/*
Template Name: Sida med samma sidebar som startsidan
*/
/*
Jonna Nöjd
Projektarbete i dt197g Mittuniversitetet 2022
*/
get_header(); 
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>

<!--Huvudinnehåll -->
<div class="wrapper noheaderimage">
    <div class="sidebar">
        <div class="maincontent">
            <!--Sidans innehåll -->
            <section>
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
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('landscape', array('class' => 'center-thumb'));
                    }
                    the_content();
                    ?>
                </article>
            </section>
        </div>
        <!-- Sidebar -->
        <?php get_sidebar('start'); ?>
    </div>
</div>
<?php get_footer(); ?>