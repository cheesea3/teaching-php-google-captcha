<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '###############';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        // Verified - send email
		
$msg = $_POST["message"];
$msg = $msg . "\rEmail sent by " . $_POST["email"]; 
$subject = "StoichTechie - Message from " . $_POST["name"];


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
		echo '<p style="text-align:center">MESSAGE SENT!</p>';
mail("daiyaan@imperfectandcompany.com", $subject, $msg);

    } else {
        // Not verified - show form error
		$error = "something broke";
    }

}  ?>
