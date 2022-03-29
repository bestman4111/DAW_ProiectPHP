<?php
    $id1 = $_POST['id1'];
    $username1 = $_POST['user1'];
    $id2 = $_POST['id2'];
    $username2 = $_POST['user2'];
    $password2 = $_POST['pass2'];
    $admin = $_POST['rol'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    if($id1 == 1 || $username1 == 'admin'){
        header('Location: /update_user_failed.php', TRUE, 301);
        exit();
    }

    if($username1 != ''){
        $atr1 = $username1;
        $atr2 = 'nume_user';
    }
    else{
        if($id1 != ''){
            $atr1 = $id1;
            $atr2 = 'id_user';
        }
    }


    if($username2 != ''){
        $sql = "UPDATE users SET nume_user = '$username2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    if($password2 != ''){
        $sql = "UPDATE users SET parola_user = '$password2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    if($id2 != ''){
        $sql = "UPDATE users SET id_user = '$id2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    
    if($admin != ''){
        $sql = "UPDATE users SET valoare_rol = '$admin' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }

    header('Location: /update_user_succes.php', TRUE, 301);
    exit();

    $db->close();

?>