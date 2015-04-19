<?php
/**
 * @package wedocracy
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="span8 offset2">
				<!-- Content -->

				<div class="entry-content row posts">
					<div class="span3">
						<?php
						if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( 'post-thumb' , array('class' => 'img-circle','style' => 'width:300px')); ?>
						</a>
						<?php endif; ?>
					</div>
					<div class="span5">

						<header class="entry-header">
							<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

							<?php if ( 'post' == get_post_type() ) : ?>
								<div class="entry-meta">
									<i><?php wedocracy_posted_on('published'); ?></i>
								</div><!-- .entry-meta -->
							<?php endif; ?>
						</header><!-- .entry-header -->
						<?php
						/* translators: %s: Name of current post */
						the_excerpt();
						?>
						<a href="<?php echo get_permalink(); ?>"><i class="icon icon-arrow-right"></i>&nbsp;Read More...</a>
						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'wedocracy' ),
							'after'  => '</div>',
						) );
						?>
					</div>
				</div><!-- .entry-content -->

				<!-- footer class="entry-footer">
					<?php wedocracy_entry_footer(); ?>
				</footer --><!-- .entry-footer -->

				<!-- / Content -->
			</div>


		</div>



		<hr/>

	</div><!-- / CONTAINER-->
	</article><!-- #post-## -->