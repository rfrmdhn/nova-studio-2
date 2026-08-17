<?php
/** Fallback template — required by WordPress, not used for the landing page itself. */
get_header();
?>
<main id="primary" class="nova-main">
    <div class="nova-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
