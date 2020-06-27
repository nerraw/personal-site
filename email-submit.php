<?php

#Receive user input
$email_address = $_POST['email_address'];
$feedback = $_POST['feedback'];

#Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$email_address  = filter_email_header($email_address);

#Send email
$headers = "From: $email_address";
$sent = mail('warrenbrodsky@gmail.com', 'Feedback Form Submission', $message, $headers);

#Thank user or notify them of a problem
if ($sent) {

    header("Location: https://www.warrenbrodsky.com/#submitSuccess");

} else {

    header("Location: https://www.warrenbrodsky.com/#submitFailure");

} 

?>