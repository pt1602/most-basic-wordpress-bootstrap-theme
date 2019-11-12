<?php 
function load_frontpage_css()
{
    wp_register_style('frontpage_css', get_template_directory_uri() . '/src/css/front-page.css', array(), false, 'all');
    wp_enqueue_style('frontpage_css');
}
add_action('wp_enqueue_scripts', 'load_frontpage_css');

get_header(); ?>

<header>
    <section id="masthead" style="background-image: url('<?php echo get_theme_mod('masthead-image', 'https://images.unsplash.com/photo-1502888395188-799b90b43871?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80') ?>')">
        <div class="container">
            <h1><?php echo get_theme_mod('masthead-title', 'Title of the page') ?></h1>
            <h2><?php echo get_theme_mod('masthead-subtitle', 'Subtitle of the page') ?></h2>
        </div>
    </section>
</header>
<main>

    <section style="display: <?php echo get_theme_mod('Teaser-display', 'initial') ?>">
        <div class="container">
            <div class="card text-center">
                <div class="card-header"><?php echo get_theme_mod('Teaser-featured', 'Featured') ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo get_theme_mod('Teaser-heading', 'Heading') ?></h5>
                    <p class="card-text"><?php echo get_theme_mod('Teaser-content', 'Content') ?></p>
                    <a href="<?php echo get_theme_mod('Teaser-link', 'https://www.google.com/') ?>" class="btn btn-primary"><?php echo get_theme_mod('Teaser-button', 'Button') ?></a>
                </div>
                <div class="card-footer text-muted">
                    <?php echo get_theme_mod('Teaser-time', '2 days ago') ?>
                </div>
            </div>
        </div>
    </section>

    <section id="cards" class="bg-light">
        <div class="container">
            <h1 class="mb-4"><?php echo get_theme_mod('Cards-title', 'Cards Title') ?></h1>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="<?php echo get_theme_mod('card-image-1', 'https://images.unsplash.com/photo-1502888395188-799b90b43871?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo get_theme_mod('card-title-1', 'Card Title 1') ?></h5>
                            <p class="card-text"><?php echo get_theme_mod('card-text-1', 'Card Text 1') ?></p>
                            <a href="<?php echo get_theme_mod('card-link-1', 'https://www.google.com/') ?>" class="btn btn-primary"><?php echo get_theme_mod('card-button-1', 'Card Button 1') ?></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo get_theme_mod('card-image-2', 'https://images.unsplash.com/photo-1502888395188-799b90b43871?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo get_theme_mod('card-title-2', 'Card Title 2') ?></h5>
                            <p class="card-text"><?php echo get_theme_mod('card-text-2', 'Card Text 2') ?></p>
                            <a href="<?php echo get_theme_mod('card-link-2', 'https://www.google.com/') ?>" class="btn btn-primary"><?php echo get_theme_mod('card-button-2', 'Card Button 2') ?></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo get_theme_mod('card-image-3', 'https://images.unsplash.com/photo-1502888395188-799b90b43871?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo get_theme_mod('card-title-3', 'Card Title 3') ?></h5>
                            <p class="card-text"><?php echo get_theme_mod('card-text-3', 'Card Text 3') ?></p>
                            <a href="<?php echo get_theme_mod('card-link-3', 'https://www.google.com/') ?>" class="btn btn-primary"><?php echo get_theme_mod('card-button-3', 'Card Button 3') ?></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center">
            <h1 class="mb-4"><?php the_title(); ?></h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <? endwhile; endif; ?>
        </div>
    </section>

    <section id="collapsible" class="bg-light">
        <div class="container">
        <h1 class="mb-4 text-center"><?php echo get_theme_mod('Collapsible-title', 'Collapsible Title') ?></h1>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo get_theme_mod('CollapsibleOne-title-1', 'CollapsibleOne Title') ?>
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php echo get_theme_mod('CollapsibleOne-text-1', 'CollapsibleOne Text') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?php echo get_theme_mod('CollapsibleTwo-title-2', 'CollapsibleTwo Title') ?>
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php echo get_theme_mod('CollapsibleTwo-text-2', 'CollapsibleTwo Text') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <?php echo get_theme_mod('CollapsibleThree-title-3', 'CollapsibleThree Title') ?>
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php echo get_theme_mod('CollapsibleThree-text-3', 'CollapsibleThree Text') ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

</main>
    
<?php get_footer(); ?>