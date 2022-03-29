<?php
    $id = $_POST['id_artist'];
    $name = $_POST['nume_album'];
    $year = $_POST['an'];
    $genre = $_POST['gen'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }
    
    if($year < 1909)
    {
        die("No album has been released before 1909. Try another year!");
    }

    $sql = "INSERT INTO Albume (id_album, id_artist, nume_album, an_lansare, gen_muzical_principal) VALUES (NULL, '$id', '$name', '$year', '$genre');";
    if($db->query($sql) === TRUE){
        header('Location: /add_album_succes.php', TRUE, 301);
        exit();
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>