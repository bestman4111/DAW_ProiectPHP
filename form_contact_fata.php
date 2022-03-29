<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="stil.css">
        <title>
            NTC Music - Contacteaza-ne
        </title>
    </head>
	<body>
	    <script src="https://www.google.com/recaptcha/api.js"></script>
	    <script>
            function onSubmit(token) {
                document.getElementById("demo-form").submit();
            }
        </script>
        <article>
            <div class="descriere">
                <form action="https://tiberiuniculae.000webhostapp.com/form_contact.php" method="post">
                    Nume: &nbsp;<input name="nume"/>
                    <br>
                    Email: &nbsp;<input name="email"/>
                    <br>
                    Mesaj:
                    <br><br>
                    <textarea name="subject" placeholder="Scrie mesajul tau pentru noi..." style="height:150px;width:400px"></textarea>
                    <br>
                    <button class="g-recaptcha" 
                        data-sitekey="reCAPTCHA_site_key" 
                        data-callback='onSubmit' 
                        data-action='submit'>Submit</button>
                    <input type="submit" name="trimite" value="Trimite"/>
                </form>
            </div>
        </article>
	</body>
</html>