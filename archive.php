<?php get_header(); ?>

    <div class="container mb-4">
        <h1 class="mt-4 mb-4"><?php single_cat_title(); ?></h1>
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-sm-6">
                    <div class="card mb-4">
                        <?php if (has_post_thumbnail()): ?>
                            <div style="background-image: url('<?php the_post_thumbnail_url('large'); ?>')" class="card-img-top"></div>
                        <?php endif; ?>

                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            <? endwhile; endif; ?>
        </div>

    </div>

<?php get_footer(); ?>