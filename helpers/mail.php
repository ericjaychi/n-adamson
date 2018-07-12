<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r", "\n"), array(" ", " "), $name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$message = trim($_POST["message"]);

	if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		http_response_code(400);
		echo "Oops! There was a problem with your submission. Please complete the form and try again.";
		exit;
	}

	$recipient = "ncladamson@gmail.com";

	$subject = "Someone Contacted You Your Site!";

	$emailContent = "Name: $name\n";
	$emailContent .= "Email: $email\n\n";
	$emailContent .= "Message:\n$message\n";

	$email_headers = "From: $name <$email>";

	if (mail($recipient, $subject, $emailContent, $email_headers)) {
		http_response_code(200);
		echo "Thank You! Your message has been sent.";
	} else {
		http_response_code(500);
		echo "Oops! Something went wrong and we couldn't send your message.";
	}

} else {
	http_response_code(403);
	echo "There was a problem with your submission, please try again.";
}
?>