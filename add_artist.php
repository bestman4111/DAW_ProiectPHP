<?php
    $name = $_POST['nume'];
    $country = $_POST['tara'];
    $year = $_POST['an'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    $sql = "INSERT INTO Artisti (id_artist, nume_artist, tara_provenienta, an_inceput_activitate) VALUES (NULL, '$name', '$country', $year);";
    if($db->query($sql) === TRUE){
        header('Location: /add_artist_succes.php', TRUE, 301);
        exit();
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>