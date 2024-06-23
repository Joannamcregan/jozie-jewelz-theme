<?php get_header();

?><main>
    <div class="heading-section">
        <h1 class="centered-text"><?php the_title(); ?></h1>
    </div>
    <div>
        <?php wp_reset_postdata();
        the_content(); ?>
    </div>
</main>

<?php get_footer();
?>