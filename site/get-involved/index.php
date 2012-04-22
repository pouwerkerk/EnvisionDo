<?php 
require_once("../functions/hello.php");
$page = "Get Involved";
$css = '<link rel="stylesheet" type="text/css" href="../css/slider.css" />';
$js = '	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.coda-slider-2.0.js"></script>
	<script type="text/javascript">
			$().ready(function() {
				$("#coda-slider-1").codaSlider({				
					panelTitleSelector: "h2.title",
					firstPanelToLoad: Math.floor(Math.random()*9)+1,					
					dynamicArrows: false,
					dynamicTabsAlign: "left",
					slideEaseFunction: "easeInOutSine"					
				});
			});
	 </script>';
	 
	echo pageTemplate($page, $css, $js);
	echo pageHeader($page); ?>
</div>
	<div class="content">
		<div class="page">
		<h2>Get Involved</h2>

<div class="coda-slider-wrapper">
	<div class="coda-slider preload" id="coda-slider-1">
	<div class="panel" id="student">
		<div class="panel-wrapper">
			<h2 class="title">As a Student</h2>
			<p>
			
			We are currently recruiting for sub-committee members, if you are interested, we highly recommend you to email us at <a href="mailto:info@envisiondo.org">info@envisiondo.org</a> (please cc it to <a href="mailto:envisiondo_board@lists.uchicago.edu">envisiondo_board@lists.uchicago.edu</a>) with your name, brief bio, and why you are interested in getting involved with EnvisionDo. We recommend that you attend one of our events to get to know the current board. We will offer a final interview to selected candidates.</p>
			<p>Receive updates on the conference by following us on <a href="http://www.facebook.com/pages/EnvisionDo/127210327348294">Facebook</a>, <a href="http://twitter.com/EnvisionDo">Twitter</a></p>
		</div>
	</div>

	<div class="panel" id="speaker">
		<div class="panel-wrapper">
			<h2 class="title">As a Speaker</h2>
			<p>You are vital to our mission.</p>
			<p>You will be a source of inspiration for young leaders worldwide by speaking at our <a href="http://envisiondo.org/conference">conference</a> or <a href="http://envisiondo.org/inspiration-2.0">Inspiration 2.0</a>. Many global top leaders are involved with EnvisionDo because they are committed to helping young people achieve success as socially-conscious global citizen and leaders. If you are interested in becoming a speaker of EnvisionDo, please contact our President Vivien Sin at <a href="mailto:viviensin@envisiondo.org">viviensin@envisiondo.org</a></p>
		</div>
	</div>

	<div class="panel" id="sponsor">
		<div class="panel-wrapper">
			<h2 class="title">As a Sponsor</h2>
			<p>We are looking for financial assistance in various forms. You could provide scholarship for oversea students who may not have the capacity to fully fund their journey, or cover the operational expenses of the conference. We also welcome support in the form of food, stationary, and other supporting materials for the conference.  As a sponsor, you will be credited in all our marketing materials that will be circulated among universities globally.</p>
			<p>To support us through sponsorship, please contact our Director of Finance Will Burgo at <a href="mailto:burgow@envisiondo.org">burgow@envisiondo.org</a></p>
		</div>
	</div>

	<div class="panel" id="mentor">
		<div class="panel-wrapper">
			<h2 class="title">As a Mentor</h2>
			<p>You will serve as an advisor (or even a source of angel investment at a later stage) to selected start-ups with the most potential in our EnvisionDo Incubator program. Depending on the degree of collaboration between you and the founders, start-ups could offer to up to 10% of their equities in return for your generous mentorship and funding.</p>
			<p>To support us through sponsorship, please contact our Director of Incubator Program Sibei Mi at <a href="mailto:sibei@envisiondo.org">sibei@envisiondo.org</a></p>
		</div>
	</div>

	<div class="panel" id="partner">
		<div class="panel-wrapper">
			<h2 class="title">As a Partner</h2>
			<p>We establish partnerships with companies and organizations that share our vision and core belief. Partners benefit from specially designed marketing opportunities at our conference upon request.</p>
			<p>See our current partners and sponsors <a href="http://envisiondo.org/about/#sponsors">here</a>.</p>
			<p>If you are interested in partnering with EnvisionDo, please contact our President Vivien Sin at <a href="mailto:viviensin@envisiondo.org">viviensin@envisiondo.org</a></p>
		</div>
	</div>			

	</div>
</div>	
</div>
</div>

<?

echo pageFooter($page);

?>