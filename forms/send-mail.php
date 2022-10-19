<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = isset($_POST['email'])? $_POST['email'] : 'krishnaa.neup@gmai.com';
$to = "krishna.neup11@gmail.com";
$subject = $_POST['subject'] ?? null;
$fromName = $_POST['name'] ?? null; 
$text_message=$_POST['message'] ?? null;
$message = '<html>
 <head>
       <title>Enquiry Contact</title>
   </head>
<body>';
$message.="{$text_message}";
$message .= '</body></html>';

// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
//baro90@yahoo.com
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
//$headers .= 'Cc: welcome@example.com' . "\r\n"; 
//$headers .= 'Bcc: krishna.neup11@gmail.com' . "\r\n";
$headers .= 'Bcc: krishnaa.neup@gmai.com' . "\r\n";
//$headers .= 'Bcc: fair@holiday-in-greece.net' . "\r\n";

if(mail($to,$subject,$message, $headers)) {
    echo "Message was sent.";
} else {
    echo "Message was not sent.";
}
?>