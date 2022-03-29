<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Modifica user
        </title>
    </head>
	<body>
        <article>
            <div class="descriere">
                <form action="https://tiberiuniculae.000webhostapp.com/update_user.php" method="post">
                    Date ale utilizatorului ce va fi modificat
                    <br><br>
                    ID: &nbsp;<input name="id1"/>
                    <br>
                    Username: &nbsp;<input name="user1"/>
                    <br><br><br>
                    Date ale utilizatorului ce trebuie modificate
                    <br><br>
                    ID: &nbsp;<input name="id2"/>
                    <br>
                    Username: &nbsp;<input name="user2"/>
                    <br>
                    Password: &nbsp;<input name="pass2"/>
                    <br>
                    Valoare rol*: &nbsp;<input name="rol"/>
                    <br>
                    *0 = utilizator normal; 1 = admin
                    <br>
                    <input type="submit" name="login" value="Modifica user"/>
                </form>
            </div>
        </article>
	</body>
</html>