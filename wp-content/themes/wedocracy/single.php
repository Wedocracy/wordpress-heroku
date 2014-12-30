<?php
/**
 * The template for displaying all single posts.
 *
 * @package wedocracy
 */

get_header(); ?>

<div class="row">
	<div class="span8 offset2">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php wedocracy_post_nav(); ?>

				<div class="row">
					<div class="span8 offset2 ">
						<!-- disqus -->
						<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
