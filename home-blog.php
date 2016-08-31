<section id="featured">
    <ul>
        <?php /*Start the loop*/ ?>
        <?php $recentposts = new WP_QUERY('category_name=blog&post_per_page=4'); ?>

        <?php while ( $recentposts->have_posts() ) : $recentposts->the-post(); ?>

            <li>
                <?php the_post_thumbnail(); ?>
                <h4><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>

            </li>

            <li>
                <?php the_post_thumbnail(); ?>
                <h4><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>

            </li>

            <li>
                <?php the_post_thumbnail(); ?>
                <h4><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>

            </li>

            <li>
                <?php the_post_thumbnail(); ?>
                <h4><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>

            </li>

        <?php endwhile; ?>

    </ul>
</section>