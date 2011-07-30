<?php
/**
 * Template Name: Application Front Page Template
 * Description: A Page Template that has three columns for text and a feature picture or video
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

// Enqueue showcase script for the slider
//wp_enqueue_script( 'twentyeleven-appfront', get_template_directory_uri() . '/js/showcase.js', array( 'jquery' ), '2011-04-28' );

get_header(); ?>

		<div id="primary" class="appfront">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php
					/**
					 * We are using a heading by rendering the_content
					 * If we have content for this page, let's display it.
					 */
					if ( '' != get_the_content() )
						get_template_part( 'content', 'hometop' );
				?>

				<div id="appfront">
				<?php
                    /**
                     * Loop through children pages and create little summaries
                     */
                     $page_query = new WP_Query(array('showposts' => 3, 'post_parent' => the_ID(), 'post_type' => 'page'));
                     $page_count = 0;
                     while ($page_query->have_posts()) { $page_query->the_post();
                ?>
                    <div class="appfront-page-<?php echo $page_count?>"> 
                        <h1 class="appfront-heading"><?php the_title(); ?>></h1>
                        <div class="appfront-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
				<?php
                    $page_count += 1;
                     }
                     wp_reset_postdata();  // Restore global post data
				?>
				</div><!-- .widget-area -->
			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_footer(); ?>
