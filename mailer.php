<?php
if(isset($_POST['submit'])) {
$to = "schunker@mps.mpg.de";
$subject = "Message from Personal Webpage";
 
// data the visitor provided
$name_field = filter_var($_POST['contact_name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['contact_email'], FILTER_VALIDATE_EMAIL);
$comment = filter_var($_POST['contact_comment'], FILTER_SANITIZE_STRING);
 
//constructing the message
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $comment";
 
// ...and away we go!
mail($to, $subject, $body);
 
// redirect to confirmation
header('Location: confirmation.htm');
} else {
// handle the error somehow
}
?>
