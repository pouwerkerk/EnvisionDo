<? 

require_once("functions/hello.php");
$css = '<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" /><style>.ideas-week {background: rgba(241,229,28, 0.5);} #ciw {background: url(../images/ciw.gif); width: 310px; height: 0px; padding-top: 231px; display: block; overflow: hidden;}</style>';
$js = '<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>';
$page = "home";
echo pageTemplate($page, $css, $js);
echo pageHeader($page); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=277429145641995";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--<div class="motto">Developing a new generation of socially-conscious leaders by providing young people <br/> a platform to create impactful changes.</div>-->
<div class="motto">
	<b>EnvisionDo</b> is an on-campus incubator program that actualizes the ideas of students. 
</div>
	<div class="body">



<div class="content">
	<!--<div class="photo"></div>-->

	<div class="overlay">
		Overlay
	</div>
	<div class="secondary">
		<div class="featurette connect-with-us">
			<h3>
				EnvisionDo on Facebook
			</h3>

<!--				<ul>
					<li><a href="http://www.facebook.com/pages/EnvisionDo/127210327348294">Facebook</a></li>
					<li><a href="http://twitter.com/EnvisionDo">Twitter</a></li>
					<li><a href="http://envisiondo.org/email">Email</a></li>					
				</ul>
-->

<div class="fb-like-box" data-href="https://www.facebook.com/EnvisionDo" data-colorscheme="dark" data-width="292" data-show-faces="true" data-border-color="#000" data-stream="false" data-header="false"></div>
</div>
		<div class="featurette middle events">
			<h3>
				EnvisionDo on Twitter
			</h3>
<!--			<p>
				Our first inspiration 2.0 seminar with Ms. Brandy Kuentzel will be on 24 February 2011.
			</p>
			<p>For more details, please visit <a class="more" href="http://envisiondo.org/inspiration-2.0">Inspiration 2.0</a></p>
 -->
 
 <script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 3,
  interval: 6000,
  width: 'auto',
  height: 200,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#bfbfbf'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('envisiondo').start();
</script>
 
		</div>
		<div class="featurette ideas-week">
			<h3>Chicago Ideas Week</h3>

			<a id="ciw" href="http://www.chicagoideas.com/affiliate-event-application/#oct13">Chicago Ideas Week</a>

		</div>
	</div>
</div>
<?
echo pageFooter($page);
?>
