<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Cauta artist
        </title>
    </head>
	<body>
        <article>
            <div class="descriere">
                <form action="https://tiberiuniculae.000webhostapp.com/search_artist.php" method="post">
                    Va rog, completati un singur camp! Completarea mai multor campuri nu duce la rezultate dorite.
                    <br>
                    ID: &nbsp;<input name="id"/>
                    <br>
                    Nume artist: &nbsp;<input name="nume"/>
                    <br>
                    Tara provenienta: &nbsp;<input name="tara"/>
                    <br>
                    An inceput activitate: &nbsp;<input name="an"/>
                    <br>
                    <input type="submit" name="login" value="Cauta artist"/>
                </form>
            </div>
        </article>
	</body>
</html>