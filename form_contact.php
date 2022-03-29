<?php
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $mesaj = $_POST['subject'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Email format is invalid.");
    }
    
    $recipient = "tiberiuniculae2000@gmail.com";
    $subject = "Formular contact";
    $formcontent = "From: $nume \n Message: $mesaj";
    $mailheader = "From: $email \r\n";
    
    if(mail($recipient, $subject, $formcontent, $mailheader)){
        echo "Your email has been sent. Thank you for contacting us.";
    }
    else{
        die("We are sorry, but the email did not go through.");
    }

    $db->close();

?>