<?php
    $id1 = $_POST['id1'];
    $name1 = $_POST['nume1'];
    $id2 = $_POST['id2'];
    $name2 = $_POST['nume2'];
    $country2 = $_POST['tara2'];
    $year2 = $_POST['an2'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    if($name1 != ''){
        $atr1 = $name1;
        $atr2 = 'nume_artist';
    }
    else{
        if($id1 != ''){
            $atr1 = $id1;
            $atr2 = 'id_artist';
        }
    }


    if($name2 != ''){
        $sql = "UPDATE Artisti SET nume_artist = '$name2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    if($country2 != ''){
        $sql = "UPDATE Artisti SET tara_provenienta = '$country2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    if($year2 != ''){
        $sql = "UPDATE Artisti SET an_inceput_activitate = '$year2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }
    if($id2 != ''){
        $sql = "UPDATE Artisti SET id_artist = '$id2' WHERE $atr2 like '$atr1'";
        if($db->query($sql) === FALSE){
            echo "Error: ".$sql."<br>".$db->error;
        }
    }

    header('Location: /update_artist_succes.php', TRUE, 301);
    exit();

    $db->close();

?>