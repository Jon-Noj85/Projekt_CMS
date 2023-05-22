<?php get_header();
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>
<!--Huvudinnehåll för kategori-->
<div class="maincontent wrapper noheaderimage">
    <h1><?php single_cat_title(); ?></h1>
    <section class="category-section">

        <?php
        // För att få sluggen för en kategori: https://wordpress.stackexchange.com/questions/280771/how-to-get-slug-of-current-category-in-taxonomy-template
        $term = get_queried_object();
        $catSlug = $term->slug;

        query_posts('category_name=' . $catSlug);
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                if (has_post_thumbnail()) {
        ?>
                    <article>
                        <div class="category-item">
                            <div class="category-item-item">

                                <?php the_post_thumbnail('landscape', array('class' => 'center-thumb')); ?>
                            </div>
                            <div class="category-item-item">
                                <h2><?php the_title(); ?></h2>

                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="readmore">Läs mer -></a>
                            </div>
                        </div>
                    </article>

                <?php
                } else {
                ?>
                    <div class="line"></div>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <p class="date">Publicerad: <?php echo get_the_date(); ?></p>

                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="readmore">Läs mer -></a>
                    </article>
        <?php
                }
            }
        } else {
            echo "<p>Det finns inget inom denna kategori.</p>";
        }


        ?>

    </section>
</div>
<?php get_footer(); ?>