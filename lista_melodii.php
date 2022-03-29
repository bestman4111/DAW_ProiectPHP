<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Lista melodii
        </title>
    </head>
	<body>
        <header>
		    <div class="titlusite">Melodii NTC Music</div>
        </header>
        <br><br>
        <article>
            <div class="descriere">
                <?php
                    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

                    if(!$db){
                        die("Connection failed: " .mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM Melodii;";
                
                    $result = $db->query($sql);

                    if($result){
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            echo 'ID melodie: &nbsp;&nbsp;&nbsp;&nbsp;'.$row['id_melodie'].'; &nbsp;&nbsp;&nbsp;&nbsp;ID album: '.$row['id_album'].'; &nbsp;&nbsp;&nbsp;&nbsp;Numar melodie: '.$row['numar_melodie'].'; &nbsp;&nbsp;&nbsp;&nbsp;Nume melodie: '.$row['nume_melodie'].'; &nbsp;&nbsp;&nbsp;&nbsp;Durata: '.$row['durata'].'<br>';
                        }
                    }
                    else{
                        echo "Error: ".$sql."<br>".$db->error;
                    }

                    $db->close();
                ?>
                <br><br><br>
                <form action="https://tiberiuniculae.000webhostapp.com/export_melodii.php" method="post">
                    <input type="submit" name="export" value="Descarca ca .xlsx"/>
                </form>
                <br>
                <a href='/index2.php'>Inapoi la pagina principala</a>
            </div>
        </article>
	</body>
</html>