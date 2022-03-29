<?php
    $id = $_POST['id'];
    $username = $_POST['user'];

    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }

    if($username != ''){
        $sql = "SELECT * FROM users WHERE nume_user like '%$username%';";
    }
    else{
        $sql = "SELECT * FROM users WHERE id_user=$id;";
    }

    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $rowcount = mysqli_num_rows($result);

    if($result){
        while($rowcount > 0){
            echo 'ID: '.$row['id_user'].';      Username: '.$row['nume_user'].';'.'<br>';
            $rowcount--;
        }
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

    $db->close();

?>