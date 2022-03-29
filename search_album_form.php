<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Cauta album
        </title>
    </head>
	<body>
        <article>
            <div class="descriere">
                <form action="https://tiberiuniculae.000webhostapp.com/search_album.php" method="post">
                    Va rog, completati un singur camp! Completarea mai multor campuri nu duce la rezultate dorite.
                    <br>
                    ID album: &nbsp;<input name="id_album"/>
                    <br>
                    ID artist: &nbsp;<input name="id_artist"/>
                    <br>
                    Nume album: &nbsp;<input name="nume"/>
                    <br>
                    An aparitie: &nbsp;<input name="an"/>
                    <br>
                    Gen muzical: &nbsp;<input name="gen"/>
                    <br>
                    <input type="submit" name="login" value="Cauta album"/>
                </form>
            </div>
        </article>
	</body>
</html>