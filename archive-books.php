<?php get_header();
?><main>
    <div class="heading-section">
        <h1>My <strong>Books</strong></h1>
    </div>
    <?php while(have_posts()){
        ?><div>
            <?php the_post(); ?>
        </div>
    <?php }
?></main>
<?php get_footer(); ?>