<?php

	require_once("functions.php");

	$id = $_REQUEST['id'];
	$subscribe = $_REQUEST['box'];
	
	if($subscribe) {
	    $subscribe = 1;
	} else {
	    $subscribe = 0;
	}
	
	function updateSubscription($id, $subscribe) {
		$link = connectDatabase();
	
		$query = "UPDATE `list` SET  `receive` =  '".$subscribe."' WHERE `id` ='".$id."';";

		$result = mysqli_query($link, $query);

		if (!$result) {
			$error = 'Failed: '. mysqli_error($link);
			echo $error;
			exit();
		}
		switch ($subscribe) {
		    case 0:
		        $output = "You will no longer receive email from EnvisionDo.";
				$content = encrypt($output, "3yFCH6Jhdsn1CyafOAz0Q3kXi");
				notify($id, $content);
		        break;
		    default:
		    	$output = "You will receive infrequent mailings from EnvisionDo.";
				$content = encrypt($output, "3yFCH6Jhdsn1CyafOAz0Q3kXi");
				notify($id, $content);
		        break;
		}
	
    	return $output;
	}
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
	<h2>EnvisionDo Subscription Details</h2>
<?php 
	echo updateSubscription($id, $subscribe);
?>

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