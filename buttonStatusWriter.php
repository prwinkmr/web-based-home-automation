<?php
	$my_file = fopen("buttonStatus.txt", "w+") or die("Error..!!!!!Cannot Open file");
	fwrite($my_file, $_POST["fan"]);
	fwrite($my_file, "\n");
	fwrite($my_file, $_POST["bulb"]);
	fwrite($my_file, "\n");
	fwrite($my_file, $_POST["tv"]);
	fwrite($my_file, "\n");
	fwrite($my_file, $_POST["ac"]);
	fwrite($my_file, "\n");
	fclose($my_file);
    header( 'Location: home.php' );
?>