<?php get_header(); ?>
<main>
   
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        
    <?php endwhile; else: ?>

    <?php endif; ?>
</main>
<?php get_footer(); ?>