<?php 
function load_singlepage_css()
{
    wp_register_style('singlepage_css', get_template_directory_uri() . '/src/css/single-page.css', array(), false, 'all');
    wp_enqueue_style('singlepage_css');
}
add_action('wp_enqueue_scripts', 'load_singlepage_css');
get_header(); ?>

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