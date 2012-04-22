<?php 

require_once("../functions/hello.php");
	
	$page = "Partners";

	echo pageTemplate($page);
	echo pageHeader($page); ?>
</div>
<div class="content">
	<div class="wrapper">
	<div class="page">
		<h2>Partners</h2>
			<ul class="logos">
				<li id="ceo"><a href="http://www.depaulceo.com/">CEO Club of Depaul</a></li>
				<li id="think-outside"><a href="http://www.thinkoutsi.de">Think Outside</a></li>
				<li id="uconn"><a href="http://www.uconn.edu/">University of Connecticut</a></li>
				<li id="alumni"><a href="http://www.uchicago.edu/alumni/">Alumni &amp; Friends</a></li>
				<li id="entrepreneurship"><a href="http://student.chicagobooth.edu/group/evc/">Entrepreneurship and Venture Capital</a></li>
				<li id="microfinance"><a href="http://www.ucmicrofinance.com/">UChicago Microfinance Initiative</a></li>
				<li id="student-initiative"><a href="http://www.thestudentinitiative.org/">The Student Initiative</a></li>
				<li id="the-mark"><a href="https://twitter.com/#!/UchicagoMark">The Mark</a></li>
			<ul>
	</div>
</div>
<? echo pageFooter($page); ?>