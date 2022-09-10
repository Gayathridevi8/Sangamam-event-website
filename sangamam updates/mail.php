<?php
    //get data from form  
    
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "manjit444manjit@gmail.com";
    $subject = "Mail From website";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@kprietsangamam.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:clubs.html");
    ?>