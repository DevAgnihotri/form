<<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$to = "devdevagnihotri8@gmail.com";
	$subject = "New message from $name";
	$body = "Name: $name\nEmail: $email\nMessage: $message";

	if (mail($to, $subject, $body)) {
		echo "Thank you for contacting us!";
	} else {
		echo "There was a problem sending your message.";
	}
}
?>
