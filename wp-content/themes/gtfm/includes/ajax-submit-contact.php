<?php
/**
 * Ajax Submit - Contact Template
 *
 * @package WP Form
 * @subpackage Include
 */

$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['message'];
$youremail=$_POST['ctyouremail'];
$subject=$_POST['ctsubject'];

$isValidate = true;

if($isValidate == true){
	$to = "$youremail";
	$subject = "$subject";
	$msg = "$message";
	$headers = "From: $name <$email>" . "\r\n" .
		"Reply-To: $email" . "\r\n" .
		"X-Mailer: PHP/" . phpversion();
	mail ($to, $subject, $msg, $headers);
	echo "true";
} else {
	echo '{"jsonValidateReturn":'.json_encode($arrayError).'}';
} ?>