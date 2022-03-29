<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $admin = $_POST ['rol'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    $sql = "INSERT INTO users (id_user, nume_user, parola_user, email_user, valoare_rol) VALUES (NULL, '$username', '$password', '$email', '$admin');";
    if($db->query($sql) === TRUE){
        header('Location: /add_user_succes.php', TRUE, 301);
        exit();
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>