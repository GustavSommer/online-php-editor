<?php echo "<!DOCTYPE html>\n"; ?>
<html>
	<head>
		<title> Mein Test in HTML und PHP </title>
		<meta charset='UFT-8'
	</head>
	<body>
		<h3>Test mit Vorname und Name</h3>
		Normaler Text <br><br>
		
		
		
		<?php
			
		$passwort = "muster";
		$passwort = $passwort . 'Kl4gsch3isser!';
		
		echo $passwort . '<br><br>';
		
		echo md5($passwort);
     
		echo '<br /><br />';
     
		echo sha1($passwort);
		
		/*
		Kommentar
		*/
			echo '<br> ende php ';
		?>
		<br>Letzte Zeile 
	</body>	
</html>
