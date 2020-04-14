<?php
session_start();

	if(isset($_POST['create'])){
    
        $nom = $_POST['nom'];
        $pnom = $_POST['pnom'];
        $email = $_POST['email'];
        $user = $_POST['user'];
        $psw = $_POST['psw'];
        $confrpsw = $_POST['confrpsw'];
		if($nom&&$pnom&&$email&&$user&&$psw&&$confrpsw)
		{
			if($psw==$confrpsw)
			{
			$connect = mysqli_connect('localhost','root','')or die('error');
		    mysqli_select_db($connect,'projet-museefr');
			
			$query = mysqli_query($connect,"INSERT INTO inscription VALUES ('$nom','$pnom', '$email', '$user', '$psw', '$confrpsw')");
			
		$rows = mysqli_num_rows($query);
		    if ($rows==1) {
		    	echo "error";
		    }else
			 header('Location:/musees/Accueil.php');
		    	exit();
		    
		}
			else echo"les deux mots de passe doivent être identiques";
		}
            else echo "Veulliez saisir tous les champs";
	
	
	}

?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

