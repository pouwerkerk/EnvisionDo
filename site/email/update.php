<?php
	require_once("functions.php");
	$token = $_REQUEST['token'];
	$email = $_REQUEST['email'];	
	
	$output = "<h2>EnvisionDo Subscription Details</h2>";

	function unsubscribeForm ($token) {
		$output = '<form method="POST" action="update_subscription.php">';

	 	$result = queryDatabase($token);
		while ($row = mysqli_fetch_array($result)) {
			if($row['receive']) {
			    $checked = "checked";
			}
			$output .= '<label for="subscribe">Receive weekly reminders to message '.$row['mentee'].': </label>';
 			$output .= '<input type="checkbox" name="box" '.$checked.'/>';
 			$output .= '<input type="hidden" name="id" value="'.$row['id'].'" />'; 			
		}
		$output .= '<input type="submit" value="Update Subscription"/></form>';
		return $output;
	}

	$output .= unsubscribeForm ($token);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>EnvisionDo | Subscription Details</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="../js/global.js"></script>	
</head>
<body class="subpage inspiration">
<div class="background"><img src="../images/backgrounds/inspiration.jpg"/></div>
<script>$(".background img").bind("load", function () { $(".background").fadeIn(); });</script>
	<div class="wrapper">
 
<div class="header">
	<div class="logo">
		<a href="/">EnvisionDo</a>
 
	</div>
	<div class="navigation">
		<ul class="tabs">
			<li id="about"><a href="/about">About</a></li>
			<li id="inspiration"><a href="/inspiration-2.0">Inspiration 2.0</a></li>
			<li id="conference"><a href="/conference">Conference</a></li>
			<li id="incubator"><a href="/incubator">Incubator</a></li>
			<!--<li id="blog"><a href="/blog">Blog</a></li>-->
			<li id="team"><a href="/team">Team</a></li>
			<li id="get-involved"><a href="/get-involved">Get Involved</a></li>
		</ul>
	</div>
</div>
<div class="content">
	<div class="page">

<?php echo $output; ?>

</div>
<div class="footer">
	<div class="sitemap">
		<ul>
			<li id="about"><a href="/about">About</a></li>
			<li id="inspiration"><a href="/inspiration-2.0">Inspiration 2.0</a></li>
			<li id="conference"><a href="/conference">Conference</a></li>
			<li id="incubator"><a href="/incubator">Incubator</a></li>
			<!--<li id="blog"><a href="/blog">Blog</a></li>-->
			<li id="team"><a href="/team">Team</a></li>
			<li id="get-involved"><a href="/get-involved">Get Involved</a></li>
		</ul>
	</div>
	<div class="sosumi">
		Copyright &copy; 2011 <a href="/">EnvisionDo</a>. All Rights Reserved.
	</div>
</div>
</div>
</div>
</body>
</html>