<?php
/**
 * @package wedocracy
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="span8 page-header text-center">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">
						<i><?php wedocracy_posted_on('published'); ?></i>
					</div><!-- .entry-meta -->
			</header><!-- .entry-header -->
		</div>
	</div>

	<div class="entry-content">
		<div class="row">
			<div class="span8">

				<?php the_content(); ?>

			</div>
		</div>
		<div class="row">

			<div class="span4 offset2 text-center">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet"></a>
					<a class="addthis_counter addthis_pill_style"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52a3ef1f56df8e68"></script>
				<!-- AddThis Button END -->
			</div>
		</div>

		<div class="row">
			<div class="span12 text-center">
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wedocracy' ),
				'after'  => '</div>',
			) );
		?></div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wedocracy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
