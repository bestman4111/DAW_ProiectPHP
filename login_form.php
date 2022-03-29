<?php
   ob_start();
   session_start();
?>
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
                <form action="https://tiberiuniculae.000webhostapp.com/login.php" method="post">
                    Username: &nbsp;<input name="user"/>
                    <br>
                    Password: &nbsp;<input name="pass" type="password"/>
                    <br>
                    <input type="submit" name="login" value="Log in"/>
                </form>
            </div>
        </article>
	</body>
</html>