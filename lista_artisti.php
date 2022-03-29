<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Lista artisti
        </title>
    </head>
	<body>
        <header>
		    <div class="titlusite">Artistii NTC Music</div>
        </header>
        <br><br>
        <article>
            <div class="descriere">
                <?php
                    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

                    if(!$db){
                        die("Connection failed: " .mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM Artisti;";
                
                    $result = $db->query($sql);

                    if($result){
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            echo 'ID artist: '.$row['id_artist'].'; &nbsp;&nbsp;&nbsp;&nbsp;Nume artist: '.$row['nume_artist'].'; &nbsp;&nbsp;&nbsp;&nbsp;Tara: '.$row['tara_provenienta'].'; &nbsp;&nbsp;&nbsp;&nbsp;An inceput activitate: '.$row['an_inceput_activitate'].'<br>';
                        }
                    }
                    else{
                        echo "Error: ".$sql."<br>".$db->error;
                    }

                    $db->close();
                ?>
                <br><br><br>
                <form action="https://tiberiuniculae.000webhostapp.com/export_artisti.php" method="post">
                    <input type="submit" name="export" value="Descarca ca .xlsx"/>
                </form>
                <br>
                <a href='/index2.php'>Inapoi la pagina principala</a>
            </div>
        </article>
	</body>
</html>