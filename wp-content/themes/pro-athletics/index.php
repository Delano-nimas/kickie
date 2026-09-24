<?php

get_header();
?>
<main class="section">
    <span class="section-label">Pro Athletics Kickboxing</span>
    <h1><?php esc_html_e('Welkom', 'pro-athletics'); ?></h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article><?php the_content(); ?></article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer();
