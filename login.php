<?php
    session_start();
    $username = $_POST['user'];
    $password = $_POST['pass'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    $query = "SELECT count(*) as cntUser FROM users WHERE nume_user = '".$username."' AND parola_user = '".$password."';";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
    
    $sql = "select valoare_rol from users where nume_user like '$username'";
    $res1 = mysqli_query($db, $sql);
    $row1 = mysqli_fetch_array($res1);
    $valoare = $row1['valoare_rol'];
    if($valoare == 1){
        $_SESSION['username'] = $username;
        header('Location: /index1.php', TRUE, 301);
        exit();
    }
    else{
        if ($count == 1)
        {
            $_SESSION['username'] = $username;
            header('Location: /index2.php', TRUE, 301);
            exit();
        }
        else{
            header('Location: /eroare_login.php', TRUE, 301);
            exit();
        }
    }
    

    $result->free();
    $db->close();
?>