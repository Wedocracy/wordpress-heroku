<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wedocracy
 */
?>


<!-- FOOTER -->

<footer id="foot-sec">
	<div class="container">

		<div class="row-fluid">
			<div class="span12 page-header text-center">
				<h3 class="">Stay in touch with wedOcracy</h3>

			</div>
		</div>
		<div class="row-fluid">
			<div class="span9 offset3">

				<div class="circ-wrap">
					<a href="http://www.facebook.com/wedocracy"><i class="icon-facebook icon-4x"></i></a>
				</div>
				<div class="circ-wrap">
					<a href="http://www.twitter.com/wedocracy"><i class="icon-twitter icon-4x"></i></a>
				</div>
				<div class="circ-wrap">
					<a href="http://www.pinterest.com/wedocracy/"><i class="icon-pinterest icon-4x"></i></a>
				</div>
				<div class="circ-wrap">
					<a href="http://wedocracy.tumblr.com"><i class="icon-tumblr icon-4x"></i></a>
				</div>

				<div class="circ-wrap">
					<a href="http://google.com/+wedocracy"><i class="icon-google-plus icon-4x"></i></a>
				</div>
			</div>
			<div class="span9 offset5">
				<div class="circ-wrap">
					<a href="http://thrivingblog.com/blog/the-thriving-bride/"><i class="icon-book icon-4x"></i></a>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<hr>
			<div class="span12 text-center">
				<p>&copy; 2013-<?php echo date("Y");?> Wedocracy LLC</p>
				<p><script type="text/javascript">
						//<![CDATA[
						<!--
						var x="function f(x){var i,o=\"\",l=x.length;for(i=l-1;i>=0;i--) {try{o+=x.c" +
							"harAt(i);}catch(e){}}return o;}f(\")\\\"function f(x,y){var i,o=\\\"\\\\\\\""+
							"\\\\,l=x.length;for(i=0;i<l;i++){if(i>(107+y))y*=2;y%=127;o+=String.fromCha" +
							"rCode(x.charCodeAt(i)^(y++));}return o;}f(\\\"\\\\\\\\\\\\017\\\\\\\\003\\\\"+
							"\\\\016\\\\\\\\033\\\\\\\\002\\\\\\\\025\\\\\\\\037\\\\\\\\006]\\\\\\\\003\\"+
							"\\\\\\007\\\\\\\\037\\\\\\\\003\\\\\\\\035\\\\\\\\025\\\\\\\\024S^A\\\\\\\\" +
							"037 ipfb8Z%ehcgxb4xuu}pftbdXn\\\\\\\\177\\\\\\\\177s~l~CX\\\\\\\\014@KH\\\\" +
							"\\\\031T]K@NOY\\\\\\\\023tgTV\\\\\\\\\\\\\\\\WGWTA\\\\\\\\027YTQ\\\\\\\\035" +
							"WQ14+1=\\\\\\\\030\\\\\\\\032eh=#? (s\\\\\\\\023r\\\\\\\\rpm187>4y.39}):\\\\"+
							"\\\\004\\\\\\\\016\\\\\\\\001\\\\\\\\021\\\\\\\\005\\\\\\\\021\\\\\\\\025[G" +
							"\\\\\\\\010TIEV^T\\\"\\\\,107)\\\"(f};)lo,0(rtsbus.o nruter};)i(tArahc.x=+o" +
							"{)--i;0=>i;1-l=i(rof}}{)e(hctac};l=+l;x=+x{yrt{)29=!)31/l(tAedoCrahc.x(elih" +
							"w;lo=l,htgnel.x=lo,\\\"\\\"=o,i rav{)x(f noitcnuf\")"                        ;
						while(x=eval(x));
						//-->
						//]]>
					</script> | <a href="https://angel.co/wedocracy-1" rel="external">investment inquiries</a> | <a href="/press/downloads">press downloads</a> | <a href="https://wedocracy.zendesk.com/entries/28523918-Main-wedocracy-FAQ">FAQ</a>						</p>
				<p>Created with passion in New Orleans, LA USA, Barcelona, Catalunya ES and San Miguel de Allende, MX by <a href="http://www.linkingarts.com" rel="external"><img src="http://cdn.wedocracy.com/img/linkingarts-badge.png" alt="Linking Arts UX &amp; Development for Web &amp; Mobile" /></a></p>
			</div>
		</div>
	</div>
</footer><!-- / FOOTER -->
<!-- / Content -->





<!-- Le javascript
================================================== -->

<script type="text/javascript" src="/cache_js/js-flat.v1403343908.js"></script>
<script>
	//http://www.ianlunn.co.uk/plugins/jquery-parallax/
	jQuery(document).ready(function(){


		$('#WeddingDateOfWedding').datepicker({
			format: 'yyyy-mm-dd'
		});

	})
</script>


<script>
	//Minimizes the menu on the mobile after clicking
	jQuery('.nav-collapse .nav > li > a').click(function(){
		jQuery('.collapse.in').removeClass('in').css('height', '0');
	});
</script>

<script type="text/javascript" src="https://assets.zendesk.com/external/zenbox/v2.6/zenbox.js"></script>

<script type="text/javascript">
	if (typeof(Zenbox) !== "undefined") {
		Zenbox.init({
			dropboxID:   "20263836",
			url:         "https://wedocracy.zendesk.com",
			tabTooltip:  "Questions?",
			tabImageURL: "https://assets.zendesk.com/external/zenbox/images/tab_support_right.png",
			tabColor:    "#FF7575",
			tabPosition: "Right"
		});
	}
</script></body>
</html>