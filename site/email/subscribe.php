<?php

require_once("functions.php");

if (count($_POST)) {
    // process the POST data
	insertDatabase($_POST);

    // redirect to the same page without the POST data
    header('Location: http://envisiondo.org/');
    die;
}

?>