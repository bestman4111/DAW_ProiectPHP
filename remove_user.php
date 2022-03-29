<?php
    $id = $_POST['id'];
    $username = $_POST['user'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    if($id == 1 || $username == 'admin'){
        header('Location: /remove_user_failed.php', TRUE, 301);
        exit();
    }

    if($username != ''){
        $sql = "DELETE FROM users WHERE nume_user='$username'";
    }
    else{
        $sql = "DELETE FROM users WHERE id_user=$id";
    }
   
    if($db->query($sql) === TRUE){
        header('Location: /remove_user_succes.php', TRUE, 301);
        exit();
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>