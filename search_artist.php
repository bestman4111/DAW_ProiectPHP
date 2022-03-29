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
        $sql = "SELECT * FROM Artisti WHERE nume_artist like '%$name%'";
    }
    else{
        if($country != ''){
            $sql = "SELECT * FROM Artisti WHERE tara_provenienta like '%$country%'";
        }
        else{
            if($year != ''){
                $sql = "SELECT * FROM Artisti WHERE an_inceput_activitate='$year'";
            }
            else{
                $sql = "SELECT * FROM Artisti WHERE id_artist=$id";
            }
        }
    }
   
    $result = $db->query($sql);

    if($result){
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo 'ID artist: '.$row['id_artist'].';      Nume artist: '.$row['nume_artist'].';        Tara: '.$row['tara_provenienta'].';       An inceput activitate: '.$row['an_inceput_activitate'].'<br>';
        }
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>