<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    //input
   $username = $_POST['username'];
   $subject = $_POST['nam'];
   $message = $_POST['comment'];
   $headers = $_POST['mail'];
   $to = "saman.electronic.security@gmail.com";





       if(mail($to ,$subject ,$message ,$headers )){
           echo "mail sent";
       }
       else {
           echo "oh shit";
       }









