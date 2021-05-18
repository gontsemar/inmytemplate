
<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

$messageSent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){
                
    $messengerName = test_input($_POST['name']);
    $messengerEmail = test_input($_POST['email']);
    $messengerSubject = test_input($_POST['subject']);
    $messengerMessage = test_input($_POST['message']);

    if (filter_var($messengerEmail, FILTER_VALIDATE_EMAIL)) {

        $messageTo = "znlfox@gmail.com";
        $messageFrom = "info@wecurelife.co.za";
        $messageBody = "";

        $messageBody .= "From: ".$messengerName."\r\n";
        $messageBody .= "Email: ".$messengerEmail."\r\n";
        $messageBody .= "Message: ".$messengerMessage."\r\n";

        if(mail($messageTo,$messengerSubject,$messageBody,$messageFrom)){

            $messageSent = true;
        }        
    } 
}
