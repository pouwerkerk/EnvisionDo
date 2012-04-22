<?php 
require_once("../functions/hello.php");
$page = "About";
$css = '<link rel="stylesheet" type="text/css" href="../css/slider.css" />';
$js = '	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.coda-slider-2.0.js"></script>
	<script type="text/javascript">
			$().ready(function() {
				$("#coda-slider-1").codaSlider({
//					autoHeight: false,
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


<div class="coda-slider-wrapper">
	<div class="coda-slider preload" id="coda-slider-1">
		<div class="panel" id="about">
			<div class="panel-wrapper">
				<h2 class="title hidden">About</h2>
<div class="left">
	<h3>Have an idea? Come to us.</h3>
	</p><strong>EnvisionDo actualizes the ideas of students.</strong><br/>Too often, students with big ideas face a lot of hurdles when trying to  implement them. By providing access to industry mentors, trainings, and opportunities to pitch to local investors, EnvisionDo fosters ideas at any level of development.</p>
</div>
<div class="right">
	<h3><strong>Idea</strong>  [ahy-<strong>dee</strong>-<em>uh</em>, ahy-<strong>dee<i>uh</i></strong>]</h3>
	<br/><em>noun</em>
	<ol>
	<li>a thought, conception, or notion. eg: That is an excellent idea.</li>
	<li>UChicago: any thought that works well in theory. Action, say what? <i>Eg: Well, that's all good in practice—but how does it work in theory?.</i></li>
	<li class="highlight"><strong>EnvisionDo</strong>: a thought that is executed into a tangible product</li>
	</ol>
	<!--<p class="highlight"><i>I have an idea, now I am developing a _______ (nonprofit/tech startup/organization), thanks to EnvisionDo.</p>-->
</div>

	</div>
	</div>
		<div class="panel" id="methodology">
			<div class="panel-wrapper">
				<h2 class="title">Methodology</h2>
						<p><b>EnvisionDo offers support to young leaders in three stages:</b></p>
						<div class="columns">
						
					<div class="third">
						<h3>Envision</h3>
						<p>We’re at the UofC—we think up grand ideas in our sleep. This step is our specialty. If it’s not your specialty just yet, we also help to provide inspiration: Winner of The Apprentice, anyone?</p>
						<p>But to take action and bring them to life? Well, that’s what the next step is for.</p>
					</div>

					<div class="third" id="middle-column">
						<h3>Equip</h3>
						<p>EnvisionDo provides the heavy lifting when it comes to the tools you need to bring your ideas to life:</p>
						<p>We provide:</p>
						<ul>
							<li>Mentors in the form of industry leaders</li>
							<li>A series of trainings in everything from venture capitalism (fundraising) to negotiation strategies</li>
							<li>Opportunities to pitch directly to Chicago investors</li>
							<li>Aka: the moolah needed for your idea</li>
						</ul>
					</div>

					<div class="third">
						<h3>Execute</h3>
						<p>Here comes EnvisionDo’s favorite part: actualizing your idea with all the resources we’ve provided, you are now ready to execute your idea pitch a well-formed (don’t worry, we help with this) business idea to industry leaders and investors spread your idea within our network of multiple colleges and their network of entrepreneurs and partner companies.</p>
					</div>
				
						</div>						
			</div>
		</div>
	</div><!-- .coda-slider -->
</div><!-- .coda-slider-wrapper -->

</div>
</div>

<?

echo pageFooter($page);

?>