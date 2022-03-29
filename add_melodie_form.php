<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Adaugare melodie
        </title>
    </head>
	<body>
        <article>
            <div class="descriere">
                <form action="https://tiberiuniculae.000webhostapp.com/add_melodie.php" method="post">
                    ID album: &nbsp;<input name="id_album"/>
                    <br>
                    Numar melodie: &nbsp;<input name="numar_melodie"/>
                    <br>
                    Nume melodie: &nbsp;<input name="nume_melodie"/>
                    <br>
                    Durata: &nbsp;<input name="durata" type="time" step="1" min="00:00:00" max="02:00:00"/>
                    <br>
                    <input type="submit" name="login" value="Adauga melodie"/>
                </form>
            </div>
        </article>
	</body>
</html>