<?php

// About, Our Program, Partners, Team, Get Involved

function pageTemplate($page, $css = NULL, $js = NULL) {
	switch ($page) {
	    case "Home":
	        $title = "EnvisionDo";
	        $bodyClass = strtolower($page);
	        break;
/*	    case "About":
	        $title = "EnvisionDo | About";
	        $page = "inspiration";
	        $bodyClass = "subpage ".$page; 
	        break;
	    case "Our Program":
			$title = "EnvisionDo | Our Program";
			$page = "program";
			$bodyClass = "subpage ".$page; 
		    break; */
	    case "Get Involved":
	        $title = "EnvisionDo | Get Involved";
	        $page = "get-involved";
	        $bodyClass = "subpage get-involved"; 
	        break;
	    default:
	        $title = "EnvisionDo | ".$page;
	        $page = strtolower($page);
	        $bodyClass = "subpage ".$page;
	        break;
	}
	$output = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="google-site-verification" content="qw8mmL7AGrrsZq-_sW4M66FwAVbmE6nsOEWf-SpUs2A" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>'.$title.'</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css?v=4" />
	'.$css.'
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="../js/global.js"></script>
	<script type="text/javascript" src="../js/jquery.ez-bg-resize.js"></script>	
	'.$js.'
</head>
<body class="'.$bodyClass.'">
<div class="background"><img src="../images/backgrounds/'.$page.'.jpg"/></div>
<script>
$(document).ready(function() {
	$(".background img").bind("load", function () { $(".background").fadeIn(); });
    $(".background").ezBgResize();
    $(".scrollbox").jScrollPane();
});</script>';
	return $output;
}

function pageHeader($page) {
	$page = strtolower($page);
	$active = 'class="active" ';
	$about = $inspiration = $conference = $incubator = $team = $sponsors = $getInvolved = NULL;
	$wrapper = "<div class=\"wrapper\"><div class=\"header\">";
	$wrapperClose = NUll;
	switch ($page) {
	    case "about":
	        $about = $active;
	        break;
	    case "program":
	        $program = $active;
	        break;
	    case "conference":
	        $conference = $active;
	        break;
	    case "incubator":
	        $incubator = $active;
	        break;
	    case "team":
	        $team = $active;
	        break;
	    case "sponsors":
	        $sponsors = $active;
	        break;
	    case "get involved":
	        $getInvolved = $active;
	        break;
	    default:
	        $active = NULL;
	        $wrapper = "<div class=\"wrapper header\">";
	        $wrapperClose = "</div>";
	        break;
	}
	$output = $wrapper.'
	<div class="logo">
		<a href="/">EnvisionDo</a>
	</div>
	<div class="navigation">
		<ul class="tabs">
			<li '.$about.'id="about"><a href="/about">About</a></li>
			<li '.$program.'id="program"><a href="/program">Our Program</a></li>
			<li '.$partners.'id="partners"><a href="/partners">Partners</a></li>
			<li '.$team.'id="team"><a href="/team">Team</a></li>
			<li '.$getInvolved.'id="get-involved"><a href="/get-involved">Get Involved</a></li>
		</ul>
	</div>'.$wrapperClose;
	
	return $output;
}

function pageFooter($page) {
	$page = strtolower($page);
	$wrapper = "</div>";
	switch ($page) {
	    case "about":
	        $about = $active;
	        break;
	    case "inspiration":
	        $inspiration = $active;
	        break;
	    case "conference":
	        $conference = $active;
	        break;
	    case "incubator":
	        $incubator = $active;
	        break;
	    case "team":
	        $team = $active;
	        break;
		case "sponsors":
			$sponsors = $active;
			break;	
	    case "get-involved":
	        $getInvolved = $active;
	        break;
	    default:
	        $active = $wrapper = NULL;
	        break;
	}
	$output = '<div class="footer">
	<div class="sitemap">
		<ul>
			<li '.$about.'id="about"><a href="/about">About</a></li>
			<li '.$program.'id="program"><a href="/program">Our Program</a></li>
			<li '.$partners.'id="partners"><a href="/partners">Partners</a></li>
			<li '.$team.'id="team"><a href="/team">Team</a></li>
			<li '.$getInvolved.'id="get-involved"><a href="/get-involved">Get Involved</a></li>
		</ul>
	</div>
	<div class="sosumi">
		Copyright &copy; 2011 <a href="/">EnvisionDo</a>. Designed by <a href="http://pieterouwerkerk.com">Pieter Ouwerkerk</a>. All Rights Reserved.
	</div>
	<div class="photography">Photo &copy; 2011 <a href="http://darrenleow.com">Darren Leow</a>.</div>
'.$wrapper.'
</div>
</div>
</body>
</html>';
	return $output;
}

?>