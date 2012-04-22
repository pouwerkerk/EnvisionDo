<?php

require_once("encryption.php");
require_once("send.php");

function generateCode() {
	for ($i=0; $i<10; $i++) {
		$d=rand(1,30)%2;
		$co .= $d ? chr(rand(97,122)) : chr(rand(48,57));
		$co .= $d ? chr(rand(97,122)) : chr(rand(65,90));
	};
    return $co;
}

function connectDatabase() {
	$link = mysqli_connect('envisiondoorg.ipagemysql.com', 'subscription', 'igkoOdzm2qO92m_e'); 
	if (!$link) { 
    	die('Could not connect: ' . mysql_error()); 
	}
	
	if (!mysqli_select_db($link, 'subscription')) {
		echo 'Unable to connect to the specified database.';
		exit();
	}

	return $link;
}

function queryDatabase($token) {
	$link = connectDatabase();
	
	$query = 'SELECT * FROM `list` WHERE `token` LIKE "'.$token.'"';

	$result = mysqli_query($link, $query);

	if (!$result) {
		$error = 'Failed: '. mysqli_error($link);
		echo $error;
		exit();
	}
	
    return $result;
}

function notify($id, $content) {
	$link = connectDatabase();
	
	$query = 'SELECT * FROM `list` WHERE `id` LIKE "'.$id.'"';

	$result = mysqli_query($link, $query);

	if (!$result) {
		$error = 'Failed: '. mysqli_error($link);
		echo $error;
		exit();
	}
	
	while ($row = mysqli_fetch_array($result)) {
		sendMessage($row['email'], $row['name'], "Email Subscription", $content, $row['token']);
	} 
	
    return $result;
}

function insertDatabase($_POST) {
	$link = connectDatabase();
	
	$token = generateCode();
	
	$query = "INSERT INTO  `list` (`name` ,  `email` ,  `token` ) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$token."');";

	$result = mysqli_query($link, $query);

	if (!$result) {
		echo $error;
		exit();
	}

	$content = "Thank you for subscribing to EnvisionDo updates.";
	$content = encrypt($content, "3yFCH6Jhdsn1CyafOAz0Q3kXi");

	sendMessage($_POST['email'], $_POST['name'], "Email Subscription", $content, $token);	

    return $result;
}

?>