<?php get_header(); ?>

<div class="container" style="padding: 40px 20px;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    <?php endwhile; else: ?>
        <p>Извините, здесь ничего нет.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
