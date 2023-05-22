<?php
/*
Jonna Nöjd
Projektarbete i dt197g Mittuniversitetet 2022
*/
?>
</main>
<!--Slut huvudinnehåll-->
<!--Sidfot-->
<footer>
    <div class="footer-content">
        <?php
        //Widget-area
        if (is_active_sidebar('left-footer')) : ?>
            <div id="left-footer" class="footer-column">
                <?php dynamic_sidebar('left-footer'); ?>
            </div>
        <?php endif;
        //Widget-area
        if (is_active_sidebar('middle-footer')) : ?>
            <div id="middle-footer" class="footer-column">
                <?php dynamic_sidebar('middle-footer'); ?>
            </div>
        <?php endif;
        //Widget-area
        if (is_active_sidebar('right-footer')) : ?>
            <div id="right-footer" class="footer-column">
                <?php dynamic_sidebar('right-footer'); ?>
            </div>
        <?php endif; ?>

    </div>
</footer>
<!--JavaScript-->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
</script>
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>