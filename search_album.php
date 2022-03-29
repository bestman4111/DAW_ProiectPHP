<?php
    $id1 = $_POST['id_album'];
    $id2 = $_POST['id_artist'];
    $name = $_POST['nume'];
    $year = $_POST['an'];
    $genre = $_POST['gen'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    if($name != ''){
        $sql = "SELECT * FROM Albume WHERE nume_album like '%$name%'";
    }
    else{
        if($year != ''){
            $sql = "SELECT * FROM Albume WHERE an_lansare='$year'";
        }
        else{
            if($year != ''){
                $sql = "SELECT * FROM Albume WHERE gen_muzical_principal like '%$genre%'";
            }
            else{
                if($id2 != ''){
                    $sql = "SELECT * FROM Albume WHERE id_artist=$id2";
                }
                else{
                    $sql = "SELECT * FROM Albume WHERE id_album=$id1";
                }
                
            }
        }
    }

    $result = $db->query($sql);

    if($result){
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo 'ID album: '.$row['id_album'].';      ID artist: '.$row['id_artist'].';        Nume album: '.$row['nume_album'].';        An aparitie: '.$row['an_lansare'].';      Gen muzical: '.$row['gen_muzical_principal'].'<br>';
        }
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>