<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package wedocracy
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<hr>

<div class="row">
	<div class="offset2">
		<div id="secondary" class="widget-area" role="complementary">
			<div class="span3">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
			<div class="span3">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			<div class="span3">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		</div><!-- #secondary -->
	</div>
</div>

<?php if(is_single()) { ?>

<hr>
	<div class="row">
		<div class="span8 offset2 text-center">
			<hr>
			<p><strong>Don&#8217;t miss new posts from us. <br><em>We won&#8217;t trade or sell your information or annoy you with constant BS!</em></strong></p>
			<form id="mc-embedded-subscribe-form" class="validate" action="http://wedocracy.us5.list-manage1.com/subscribe/post?u=f7f3adec1b4fe1fd4780b1114&amp;id=6541f83e6b" method="post">
				<input id="mce-EMAIL" class="email" name="EMAIL" type="email" style="height:3em;width:20em;margin-top:.5em" placeholder="you@awesome-wedding.com" />
				<button id="mc-embedded-subscribe" name="subscribe" type="submit" class="btn btn-primary btn-large"><i class="icon-envelope icon-white"></i> Wedocracy mailing list</button>
			</form>
		</div>

	</div>
	<hr>
<div class="row">
	<div class="span2 offset3 text-center">
		<?php echo wedocracy_get_avatar(get_the_author_meta('user_email'), $size = '100'); ?>
		<br ><br><div class="clearfix"></div>
		<?php do_shortcode('[userfields]'); ?>
		<br>
		<a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_url'); ?></a>
	</div>
	<div class="span5">
		<h3><a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('display_name'); ?></a></h3>
		<?php the_author_meta('description'); ?>

	</div>
</div>
<hr><?php } ?>