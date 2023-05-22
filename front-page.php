<?php get_header();
/*
Jonna Nöjd
Projektarbete i dt197g Mittuniversitetet 2022
*/
?>

<!--Banner-bild-->
<div id="banner-image">
    <img src="<?= get_template_directory_uri(); ?>/images/header.jpg" alt="" />
    <h1><?php bloginfo('name'); ?></h1>
</div>
<div class="wrapper">
    <!--grid-container-->
    <div class="sidebar">
        <!--Huvudinnehåll-->
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
                    <h2><?php the_title(); ?></h2>
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
        <?php get_sidebar('start'); ?>
    </div>

    <!--De senaste 3 aktiviteterna-->
    <section class="latest-activities post-section">
        <h2>Massa kul i Rävsta stugby</h2>
        <div class="post-listing">
            <?php
            query_posts('category_name=aktiviteter&posts_per_page=3');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    if (has_post_thumbnail()) {

            ?>
                        <div class="post-item">
                            <article>
                                <!-- Bild är länk till enskilt inlägg -->

                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('landscape', array('class' => 'center-thumb')); ?></a>
                                <div class="post-link">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </article>

                        </div>
            <?php
                    }
                }
            }
            ?>

        </div>
    </section>
    <!--De senaste 3 aktiviteterna-->
    <section class="post-section">
        <h2>Boka en stuga</h2>
        <div class="post-listing">
            <?php
            query_posts('category_name=vara-stugor&posts_per_page=4');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    if (has_post_thumbnail()) {

            ?>
                        <div class="post-item">
                            <article>
                                <!-- Bild är länk till enskilt inlägg -->

                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('card', array('class' => 'center-thumb')); ?></a>
                                <div class="post-link">
                                    <h3><a href="<?php the_permalink(); ?>">Läs mer om <?php the_title(); ?></a></h3>
                                </div>
                            </article>

                        </div>
            <?php
                    }
                }
            }
            ?>

        </div>
    </section>
</div>
<?php get_footer(); ?>