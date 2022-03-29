<?php
    $id = $_POST['id'];
    $name = $_POST['nume'];
    $country = $_POST['tara'];
    $year = $_POST['an'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    if($name != ''){
        $sql = "DELETE FROM Artisti WHERE nume_artist='$name'";
    }
    else{
        if($country != ''){
            $sql = "DELETE FROM Artisti WHERE tara_provenienta='$country'";
        }
        else{
            if($year != ''){
                $sql = "DELETE FROM Artisti WHERE an_inceput_activitate='$year'";
            }
            else{
                $sql = "DELETE FROM Artisti WHERE id_artist=$id";
            }
        }
    }
   
    if($db->query($sql) === TRUE){
        header('Location: /remove_artist_succes.php', TRUE, 301);
        exit();
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>