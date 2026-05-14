<?php get_header(); ?>

<main class="section">
    <div class="container">

        <div class="section-heading">
            <div>
                <h1>Estatein Blog</h1>
                <p>Latest articles and updates.</p>
            </div>
        </div>

        <?php if (have_posts()) : ?>

            <div class="property-grid">

                <?php while (have_posts()) : the_post(); ?>

                    <article class="property-card">

                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>

                        <div class="property-body">

                            <h3><?php the_title(); ?></h3>

                            <p>
                                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                            </p>

                            <div class="property-bottom">
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                    Read More
                                </a>
                            </div>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>