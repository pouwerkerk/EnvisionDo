<?php 
require_once("../functions/hello.php");
$page = "Team";
$css = '<link rel="stylesheet" type="text/css" href="../css/slider.css" />';
$js = '	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.coda-slider-2.0.js"></script>
	<script type="text/javascript">
			$().ready(function() {
				$("#coda-slider-1").codaSlider({
					autoHeight: false,				
					panelTitleSelector: "h2.name",
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
		<h2>Team</h2>

<div class="coda-slider-wrapper">
	<div class="coda-slider preload" id="coda-slider-1">

	<div class="panel" id="vivien">
		<div class="panel-wrapper">
			<img class="portrait" alt="Vivien Sin" src="../images/portraits/vivien.jpg"/>
			<h2 class="name">Vivien Sin</h2>
			<h3 class="title">Founder and President</h3>
			<p>Vivien is a third year economics major. She spent two years at United World College with students from 100 different countries, who are all selected based on their potential to “make the world a better place”. This experience prompted her to start EnvisionDo at the end of her first year out of a desire to ignite more action-oriented idealism among students. She thoroughly enjoys working with her amazing team, and is grateful for the support various individuals and organizations have offered to EnvisionDo. She currently serves on the board of Chicago Club for Alternative Investment, and contributes to the Levo League. She is passionate in entrepreneurship and is fascinated by the fast-paced and solution-driven culture of the start-up world. She is committed to creating more models in which sustainable business strategies could be combined with social causes. She is also strangely obsessed with elephants and dreams of opening an orphanage for baby elephants whose parents were killed by poachers.</p>
		</div>
	</div>

	<div class="panel" id="pamela">
		<div class="panel-wrapper">
			<img class="portrait" alt="Pamela Villa" src="../images/portraits/pamela.jpg"/>		
			<h2 class="name">Pamela Villa</h2>
			<h3 class="title">Co-chair of Conference</h3>
			<p>Pamela is a third year studying Political Science. Motivated by EnivisionDo's mission to help young leaders explore innovative models of change, she joined the board last Spring. EnvisionDo has since enabled her to not only learn more extensively about different means for change but has also afforded her the opportunity to work on a unique conference that will bring together the brightest young leaders and connect them with the world's top innovators in microfinance and facilitate collaboration. She is also the Founder of a community service organization called Roots & Shoots at the University of Chicago, a Class Representative within Student Government and on the board of Kairos, an entrepreneurship organization on campus. After spending her youth in Mexico City and having encountered poverty firsthand, she hopes to one day found her own microfinance firm in order to help individuals living in poverty start their own small businesses and ultimately increase economic growth in Mexico. She likes running, reading philosophy and painting and hopes to base jump in a wing-suit before she dies.</p>
		</div>
	</div>

	<div class="panel" id="diana">
		<div class="panel-wrapper">
			<img class="portrait" alt="Diana Jia" src="../images/portraits/diana.jpg"/>		
			<h2 class="name">Diana Jia</h2>
			<h3 class="title">VP of External Relations and Development</h3>
			<p>Diana is a third year student at the University of Chicago majoring in Psychology. Having lived in several countries growing up, Diana has fostered a taste for change that has left her insatiably curious and eager to learn more. Staying true to her love for structure, EnvisionDo’s mission of providing a framework in which to incubate and implement ideas speaks directly to her interests. That combined with her preference for working with a team of passionate and curious individuals culminates into her helping to found EnvisionDo.</p>
			<p>Having worked and studied abroad in Bangalore, Beijing, and soon to be in spring of 2012, Athens, Diana’s continues her passion for understanding the macro-flow of international workings. In her spare time, Diana enjoys competitive swimming, Bikram yoga, and any and all things related to self-development. She looks forward to one day founding her own center for wellness that focuses on meditation, nutrition, spirituality, and other forms that aid emotional and psychological flourishing.</p>
		</div>
	</div>

	<div class="panel" id="vivan">
		<div class="panel-wrapper">
			<img class="portrait" alt="Vivian Mak" src="../images/portraits/vivian.jpg"/>		
			<h2 class="name">Vivian Mak</h2>
			<h3 class="title">Co-chair of Conference</h3>
			<p>Vivian is a second year student at the University of Chicago majoring inEconomics and Political Science. Having studied in the United Kingdom and HongKong and volunteered in Morocco before coming to Chicago, Vivian has greatexposure to a wide range of cultural experiences and fully understands localissues of various parts of the world.</p>
			<p>Outside classes, Vivian is also a member of the Rockefeller Chapel Choir. Vivianalso cares deeply about the community. This is why she is elected Social Chair forthe Hong Kong Students Association to help bond Hong Kong students with thewider college community. She is also an active member of the Chicago Society,where she helps organize on-campus events to raise awareness of interestingeconomic and political issues.</p>
			<p>Vivian has long wanted to contribute to the development of the poorer countriessince her volunteering experience in Morocco, and this passion brought her toEnvision Do last year. With little prior experience in developmental works, theshort period of time at Envision Do has already made Vivian more matured onserious topics of economic and social development, and she is keen to bring herlearning to make an impact.</p></div>
	</div>

	<div class="panel" id="will">
		<div class="panel-wrapper">
			<img class="portrait" alt="Will Burgo" src="../images/portraits/will.jpg"/>		
			<h2 class="name">Will Burgo</h2>
			<h3 class="title">Director of Finance</h3>
			<p>Will Burgo is a third year economics major who has shown a dedicated interest in entrepreneurship. He co-founded an RSO aimed at raising awareness of entrepreneurship on campus. He worked at a venture capital firm in Silicon Valley last summer where he worked with client companies - such as DropBox and Color - to raise money and create business models. He has also taken several computer science courses on general programming and web design.</p>
		</div>
	</div>

	<div class="panel" id="lanny">
		<div class="panel-wrapper">
			<img class="portrait" alt="Lanny Lang" src="../images/portraits/lanny.jpg"/>		
			<h2 class="name">Lanny Lang</h2>
			<h3 class="title">Co-chair of Conference</h3>
			<p>Lanny Lang joined EnvisionDo in order to make a social impact though the world of business, a field in which she has a keen interest. In particular, she is interested in social entrepreneurship because she believes that in the modern world, business is the platform that has the greatest leverage in doing good. In addition to EnvisionDo, she is involved in the Blue Chips, the leading student investing organization at Uchicago, as an analyst, and works at the Booth School of Business as a research assistant. In her spare time, she enjoys playing the piano and photography.</p>
		</div>
	</div>

	<div class="panel" id="sibei">
		<div class="panel-wrapper">
			<img class="portrait" alt="Sibei Mi" src="../images/portraits/sibei.jpg"/>	
			<h2 class="name">Sibei Mi</h2>
			<h3 class="title">Director of EnvisionDo Incubator</h3>
			<p>Sibei Mi is a third year at the University of Chicago studying French Literature and East Asian Languages and Civilizations. She feels proud to be on the EnvisionDo team because she believes young leaders and entrepreneurs deserve the opportunity to learn about the various ways in which they could impact an issue. She believes no one should be limited to change the world through one way, and instead should be able to find that solution through any career field they choose. She is also excited to help develop the incubator program that supports and connects start-up ventures with mentorship and resources. She strives to help connect students and young entrepreneurs from all over the globe with established entrepreneurs who have succeeded through EnvisionDo. With so many world-changing ideas out there, she wants to make sure everyone is receiving the right support they need, and making the impact they have always dreamed about.</p>
			<p>Outside of EnvisionDo, she is passionate about traveling and learning about different countries. Both the Indian and French cultures have proven to be intriguing for her. The next stops on her wish list are Bangkok, Cape Town, and Cairo.  In her spare time, she enjoys figure skating or playing orchestral compositions on the flute. When it is pouring outside, she loves to sit in her bed, drink hot chocolate, and enjoy a nice French film.</p>
		</div>
	</div>

	<div class="panel" id="jakub">
		<div class="panel-wrapper">
			<img class="portrait" alt="Jakub Tucholski" src="../images/portraits/jakub.jpg"/>		
			<h2 class="name">Jakub Tucholski</h2>
			<h3 class="title">Co-chair of Conference</h3>
			<p>Jakub Tucholski is a second year history and political science major at UChicago, with long-standing interests in public policy and economic development. An idealist at heart, Jakub joined EnvisionDo as a result of his long-standing desire to actively give back to the community, and saw EnvisionDo as a truly extraordinary way to do so. Besides EnvisionDo, Jakub is an active member of the UChicago Model United Nations community. He has competed at numerous collegiate conferences, and is a chair at ChoMUN, the collegiate conference hosted by UChicago, as well as a staffer for MUNUC, UChicago’s high school conference. A first-generation Polish immigrant, Jakub is deeply interested in issues surrounding Eastern European economic development and is a serious student of Soviet history. He would like to eventually return to his home country to pursue a career in economic policymaking. He also enjoys listening to obscure electronica, cuddling with puppies, and moonlit walks on the beach.</p>
		</div>
	</div>

	<div class="panel" id="pieter">
		<div class="panel-wrapper">
			<img class="portrait" alt="Pieter Ouwerkerk" src="../images/portraits/pieter.jpg"/>		
			<h2 class="name">Pieter Ouwerkerk</h2>
			<h3 class="title">Chair of Technology</h3>
			<p><a href="http://pieterouwerkerk.com">Pieter Ouwerkerk</a> is a fourth year student at the University of Chicago studying Economics and Computer Science. Pieter lives and breathes technology and currently serves as Director of Technology for EnvisionDo. Raised on Microsoft Windows 3.1, Pieter sees computers playing as much of a role in his future as his past.</p>
			<p>Much of Pieter's work centers around the intersection of service and technology: Pieter is a founding member of the non-profit <a href="http://umentor.org">University Mentorship by Correspondence</a>, an active member of Eckhart Consulting, TEDxUChicago, and Global Business Brigades: UChicago, and interns for Chicago Studies and the <a href="http://ucsc.uchicago.edu/">University Community Service Center</a>.</p>
		</div>
	</div>
	</div><!-- .coda-slider -->
</div><!-- .coda-slider-wrapper -->

	
		</div>
</div>

<?

echo pageFooter($page);

?>