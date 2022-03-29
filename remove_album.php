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
        $sql = "DELETE FROM Albume WHERE nume_album='$name'";
    }
    else{
        if($year != ''){
            $sql = "DELETE FROM Albume WHERE an_lansare='$year'";
        }
        else{
            if($year != ''){
                $sql = "DELETE FROM Albume WHERE gen_muzical_principal='$genre'";
            }
            else{
                if($id2 != ''){
                    $sql = "DELETE FROM Albume WHERE id_artist=$id2";
                }
                else{
                    $sql = "DELETE FROM Albume WHERE id_album=$id1";
                }
                
            }
        }
    }
   
    if($db->query($sql) === TRUE){
        header('Location: /remove_album_succes.php', TRUE, 301);
        exit();
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>