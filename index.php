<?php get_header(); ?>

<main>
    <?php if (have_posts()) : 
        while (have_posts()) : the_post(); 
    ?>
        <article class="wp-post">
            <h1><?php the_title(); ?></h1>
            <h4>Vom <?php the_time('d. M Y') ?></h4>
            <p><?php the_content(__('(more...)')); ?></p>
        </article>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
