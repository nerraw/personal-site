<?php


#Receive user input
$email_address = $_POST['email_address'];
$message = $_POST['message'];


#Filter user input
function filter_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$email_address  = filter_data($email_address);

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
