<?php get_header(); ?>

<main class="section single-page">

    <div class="container">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <article class="page-content">

                    <h1><?php the_title(); ?></h1>

                    <div class="page-text">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>