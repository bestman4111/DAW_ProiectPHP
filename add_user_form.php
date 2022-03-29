<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Login
        </title>
    </head>
	<body>
        <article>
            <div class="descriere">
                <form action="https://tiberiuniculae.000webhostapp.com/add_user.php" method="post">
                    Username: &nbsp;<input name="user"/>
                    <br>
                    Password: &nbsp;<input name="pass" type="password"/>
                    <br>
                    Email: &nbsp;<input name="email"/>
                    <br>
                    Valoare rol*: &nbsp;<input name="rol"/>
                    <br>
                    *0 = utilizator normal; 1 = admin
                    <br>
                    <input type="submit" name="login" value="Adauga user"/>
                </form>
            </div>
        </article>
	</body>
</html>