<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Inscription</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
       

    </head>

    <body>

        <div class="page-container">
            <h1>Inscription</h1>
			<form action="/musees/login/inscriptioncode.php" method="POST">
            
                <input type="text" name="nom" class="username" placeholder="Nom">
                <input type="text" name="pnom" class="username" placeholder="Prénom">
                <input type="text" name="email" class="username" placeholder="E-mail">
                <input type="text" name="user" class="username" placeholder="Nom d'utilisateur">
                <input type="password" name="psw" class="password" placeholder="Mot de passe">
                <input type="password" name="confrpsw" class="password" placeholder="Confirmer le mot de passe">
                <button type="submit" name="create">Creer un compte</button>
                <a href="../login/login.php">Vous avez déjà un compte?</a>
                <div class="error"><span>+</span></div>
            </form>
        </div>

        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

