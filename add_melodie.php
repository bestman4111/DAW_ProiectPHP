<?php
    $id = $_POST['id_album'];
    $number = $_POST['numar_melodie'];
    $name = $_POST['nume_melodie'];
    $length = $_POST['durata'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    $sql = "INSERT INTO Melodii (id_melodie, id_album, numar_melodie, nume_melodie, durata) VALUES (NULL, '$id', '$number', '$name', '$length');";
    if($db->query($sql) === TRUE){
        header('Location: /add_melodie_succes.php', TRUE, 301);
        exit();
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>