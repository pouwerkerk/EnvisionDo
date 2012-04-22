<?php

/*
Variables:
	$content (string): The text (HTML supported) contained in the body of the email.
	$date (bool): If true, show the date at the top of the email.
	$log_in (bool): If true, provide a link to log in to UMentor. Should be disabled for bulk mailings to non-members (recruitment, etc.).
	$action_type (string): The full-width button at the bottom of the message, supported types are "log-in", "learn-more", "none", and "custom".
	$action_text (string): If "custom" is provided as the previous argument, the text the button should have. NULL if not "custom".
	$action_url (string): If "custom" is provided as $action-type, the URL for the button.  NULL if not "custom".
*/

require_once('encryption.php');

function email_HTML($body, $name, $token)
{
	$output = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="padding:0;">';
	$output .= email_formatter($body, $name, $token);
	
	$output .= "
</body>
</html>";
 return $output;
}

function email_formatter($body, $name, $token)
{

$today_date = date("F j, Y");
$year = date("Y");

$email_body = decrypt($body, "3yFCH6Jhdsn1CyafOAz0Q3kXi");
$email_body = stripslashes($email_body);	

$content = "<div style='min-width: 400px; width: 95%; margin: 5% auto; border: 1px solid #bfbfbf; border-bottom: 1px solid #545454; border-top: 1px solid #e5e5e5;'>
	<div style='height: 80px; padding: 15px; border-bottom: 1px dotted #7f7f7f;'>
		<div style='float: right; line-height: 80px; font-size: 10pt; color: #7f7f7f; font-family: \"Helvetica Neue\", Arial, Helvetica, Geneva, sans-serif;'>".$today_date."</div>
		<div>
		<a href='http://envisiondo.org'><img src='http://envisiondo.org/images/email-logo.png' alt='EnvisionDo'/></a>
		</div>
	</div>
	<div style='margin: 15px; font: 14px/15pt \"Helvetica Neue\", Arial, Helvetica, Geneva, sans-serif;'>";
	
	$content .= "<p>".$name.",</p>";
	
	$content .= $email_body;
	
	$content .= "</div>
</div>
<div style='color: #7f7f7f; font: 12px \"Lucida Grande\", Lucida, Verdana, sans-serif; text-align: center; margin-top: 10px;'>&copy; <a style='color: #7f7f7f;' href='http://envisiondo.org'>EnvisionDo</a> ".$year.". <a style='color: #7f7f7f;' href='http://envisiondo.org/email/subscription.php?token=".$token."'>Modify</a> your subscription.</div>";

	return $content;
 
}

?>
