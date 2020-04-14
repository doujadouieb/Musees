<?php session_start(); ?>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Connexion</title>
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
            <h1>Connexion</h1>
            <form action="/musees/login/logincode.php" method="POST">
                <input type="text" name="email" class="email" placeholder="Email">
                <input type="password" name="password" class="password" placeholder="Mot de passe">
                <button type="submit" name="Connexion">Connexion</button>
                
            </form>
           <a href="Inscription.php"><button type="submit"> Creer un compte</button></a>
            
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

