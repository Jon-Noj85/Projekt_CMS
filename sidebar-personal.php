<!--Sidebar med nyhetsarkiv-->
<aside>
    <?php
    //Widget-area
    if (is_active_sidebar('start-puff')) { ?>
        <div id="staff-puff" class="widget">
            <?php dynamic_sidebar('staff-puff'); ?>
        </div>
        <section class="archive">
            <h2>Senaste nytt</h2>
            <ul>
                <?php

                query_posts('category_name=nyheter&posts_per_page=10');
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> -></a>
                            <p class="date">Publicerad: <?php echo get_the_date(); ?></p>
                        </li>

                <?php
                    }
                }
            } else {
                ?>
                <section class="archive">
                    <h2>Senaste nytt</h2>
                    <ul>
                        <?php

                        query_posts('category_name=nyheter&posts_per_page=15');
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                        ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> -></a>
                                    <p class="date">Publicerad: <?php echo get_the_date(); ?></p>
                                </li>

                    <?php
                            }
                        }
                    }
                    ?>
                    </ul>
                </section>
                <!--Slut på sidebar-->
</aside>
<!--Slut på grid -->