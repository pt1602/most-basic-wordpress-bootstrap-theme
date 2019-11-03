<?php get_header(); ?>

    <?php if (has_post_thumbnail()): ?>
        <section class="section-image" style="background-image: url('<?php the_post_thumbnail_url('largest'); ?>')"></section>
    <?php endif; ?>

    <div class="container">
        <h1 class="mt-4"><?php the_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <? endwhile; endif; ?>
    </div>

<?php get_footer(); ?>