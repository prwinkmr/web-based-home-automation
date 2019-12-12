<?php
	session_start();
	$my_file = fopen("login.txt", "r+") or die("Error..!!!!!Cannot Open file");
	$users = array("username" => array(), 
					"password" => array(),
					);
	$valid_user = False;
	while (! feof($my_file))
	{
		$name = trim(fgets($my_file));
		$pass = trim(fgets($my_file));
		array_push($users["username"],$name);
		array_push($users["password"],$pass);
	}
	fclose($my_file);
	for($i = 0; $i < count($users["username"]); $i++)
	{
		if ($_POST["username"] === $users["username"][$i] and $_POST["password"] === $users["password"][$i]) 
    	{
    		$valid_user = True;
    		break;
    	}
	}
	if ($valid_user) 
	{
		$_SESSION["name"] = $_POST["username"];
		header('Location: home.php');
	} 
	else 
	{
			echo "<script>
				alert('Email or password is incorrect!');
				window.location = 'login.html';
			 	</script>";
	}	
?>