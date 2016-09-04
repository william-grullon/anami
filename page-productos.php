<?php /*
Template Name: Productos
*/
?>
<?php
/**
 * Created by william.grullon at g3hd.com
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anami
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content-productos', 'page' );

            endwhile; // End of the loop.
            ?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
