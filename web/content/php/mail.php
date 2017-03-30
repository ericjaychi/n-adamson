<?php
	$myEmail = 'ericjaychi@gmail.com';

	$name = trimXSS($_POST['name']);
	$from = trimXSS($_POST['email']);
	$message = trimXSS($_POST['message']);

	if (empty($errors)) {
		$emailSubject = "Someone Contacted You!";
		$emailBody = "You have received a new message from n-adamson.com." .
			"\n NAME: $name
			\n EMAIL: $email
			\n MESSAGE: \n $message";

		$headers = "From: $from";
		$headers .= "To: $myEmail";

		mail($myEmail, $emailSubject, $emailBody, $headers);
	}

function trimXSS($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>