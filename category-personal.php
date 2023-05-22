<?php get_header();
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>
<!--Huvudinnehåll-->
<div class="wrapper noheaderimage">
    <div class="sidebar">
        <div class="maincontent">
            <h1>Vår personal</h1>
            <div class="line"></div>

            <section class="staff-section">

                <?php

                query_posts('category_name=personal');
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        if (has_post_thumbnail()) {
                ?>
                            <article>
                                <div class="staff-item">
                                    <div class="staff-item-item">

                                        <?php the_post_thumbnail('square', array('class' => 'round-thumb')); ?>
                                    </div>
                                    <div class="staff-item-item">
                                        <h2><?php the_title(); ?></h2>

                                        <?php the_content(); ?>

                                    </div>
                                </div>
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
        <!-- Sidebar för personal-sidan -->
        <?php get_sidebar('personal'); ?>
    </div>
</div>
<?php get_footer(); ?>