<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Modifica artist
        </title>
    </head>
	<body>
        <article>
            <div class="descriere">
                <form action="https://tiberiuniculae.000webhostapp.com/update_artist.php" method="post">
                    Date artist ce va fi modificat
                    <br><br>
                    ID: &nbsp;<input name="id1"/>
                    <br>
                    Nume artist: &nbsp;<input name="nume1"/>
                    <br>
                    <br><br><br>
                    Date artist ce trebuie modificate
                    <br><br>
                    ID modificat: &nbsp;<input name="id2"/>
                    <br>
                    Nume artist modificat: &nbsp;<input name="nume2"/>
                    <br>
                    Tara provenienta modificata: &nbsp;<input name="tara2"/>
                    <br>
                    An inceput activitate modificat: &nbsp;<input name="an2"/>
                    <br>
                    <input type="submit" name="login" value="Modifica artist"/>
                </form>
            </div>
        </article>
	</body>
</html>