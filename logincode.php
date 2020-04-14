<?php
    session_start();
	
	
	if(isset($_POST['Connexion']))
	{
		$email = $_POST['email'];
		$password	= $_POST['password'];
		if ($email&&$password) {
			$connect = mysqli_connect('localhost','root','')or die('error');
		    mysqli_select_db($connect,'projet-museefr');
		    $sql = mysqli_query($connect,"SELECT * FROM inscription WHERE email = '$email' && psw ='$password' ");
		   $rows = mysqli_num_rows($sql);
		    if ($rows==1) {
		   
		    	header('Location:/musees/Accueil.php');
		    	exit();
		    }else echo "email ou password incorrects";

		}else echo "veuillez saisir tous les champs";
	}
		
     
	?>
	 
	 
	
	
        

		