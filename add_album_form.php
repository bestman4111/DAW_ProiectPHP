<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Adaugare album
        </title>
    </head>
	<body>
        <article>
            <div class="descriere">
                <form action="https://tiberiuniculae.000webhostapp.com/add_album.php" method="post">
                    ID artist: &nbsp;<input name="id_artist"/>
                    <br>
                    Nume album: &nbsp;<input name="nume_album"/>
                    <br>
                    An lansare: &nbsp;<input name="an"/>
                    <br>
                    Gen muzical: &nbsp;<input name="gen"/>
                    <br>
                    <input type="submit" name="login" value="Adauga album"/>
                </form>
            </div>
        </article>
	</body>
</html>