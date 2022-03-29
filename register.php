<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $password_conf = $_POST['pass_conf'];
    $email = $_POST['email'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }
    
    if($password != $password_conf)
    {
        die("Password and Confirm password fields should match.");
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Email format is invalid.");
    }
    
    $sql = "INSERT INTO users (id_user, nume_user, parola_user, email_user) VALUES (NULL, '$username', '$password', '$email');";
    
    $subject = "Inregistrare pe siteul NTC Music";
    $formcontent = "Tocmai v-ati inregistrat cu succes pe siteul nostru!";
    $mailheader = "From: ntcmusic@gmail.com \r\n";
    
    mail($email, $subject, $formcontent, $mailheader);
    
    if($db->query($sql) == TRUE){
        header('Location: /register_succes.php', TRUE, 301);
        exit();
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }
    
    $db->close();

?>