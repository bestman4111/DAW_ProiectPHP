<?php
    $id11 = $_POST['id_album1'];
    $name1 = $_POST['nume1'];
    $id12 = $_POST['id_album2'];
    $id22 = $_POST['id_artist2'];
    $name2 = $_POST['nume2'];
    $year2 = $_POST['an2'];
    $genre2 = $_POST['gen2'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    if($name1 != ''){
        $atr1 = $name1;
        $atr2 = 'nume_album';
    }
    else{
        if($id11 != ''){
            $atr1 = $id11;
            $atr2 = 'id_album';
        }
    }


    if($name2 != ''){
        $sql = "UPDATE Albume SET nume_album = '$name2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    if($genre2 != ''){
        $sql = "UPDATE Albume SET gen_muzical_principal = '$genre2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    if($year2 != ''){
        $sql = "UPDATE Albume SET an_lansare = '$year2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    if($id12 != ''){
        $sql = "UPDATE Albume SET id_album = '$id12' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    if($id22 != ''){
        $sql = "UPDATE Albume SET id_artist = '$id22' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }

    header('Location: /update_album_succes.php', TRUE, 301);
    exit();

    $db->close();

?>