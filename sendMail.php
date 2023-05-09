<?php
 $to = "akshaytakalkar08@gmail.com";
 $subject = "This is subject from akshay takalkar";
 
 $message = "<b>This is HTML message.</b>";
 $message .= "<h1>This is headline.</h1>";
 
 $header = "From:dnalohar@gmail.com \r\n";
 
 $retval = mail ($to,$subject,$message,$header);
 
 if( $retval == true ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
 }
?>