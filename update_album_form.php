<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Modifica album
        </title>
    </head>
	<body>
        <article>
            <div class="descriere">
                <form action="https://tiberiuniculae.000webhostapp.com/update_album.php" method="post">
                    Date ale albumului ce va fi modificat
                    <br><br>
                    ID album: &nbsp;<input name="id_album1"/>
                    <br>
                    Nume album: &nbsp;<input name="nume1"/>
                    <br><br><br>
                    Date ale albumului ce trebuie modificate
                    <br><br>
                    ID album: &nbsp;<input name="id_album2"/>
                    <br>
                    ID artist: &nbsp;<input name="id_artist2"/>
                    <br>
                    Nume album: &nbsp;<input name="nume2"/>
                    <br>
                    An aparitie: &nbsp;<input name="an2"/>
                    <br>
                    Gen muzical: &nbsp;<input name="gen2"/>
                    <br>
                    <input type="submit" name="login" value="Modifica album"/>
                </form>
            </div>
        </article>
	</body>
</html>