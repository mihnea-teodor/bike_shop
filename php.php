<?php
	session_start();
	include_once("config.php");
	
	$results = $mysqli->query("SELECT * FROM utilizatori");
	while($obj = $results->fetch_object())
	{
		if($obj->password == $_GET['parola']){
			echo 'Bine ai revenit '.$obj->username;
			setcookie('user', 'Mihnea', time()+3600, '', '', '', TRUE);
		}
		else
		{
			echo 'Parola sau utilizatorul sunt gresite';
		}
	}
?>
	
<script>
	setTimeout(function () {    
    	window.location.href = 'Shop.html'; 
	},3000); // 3 seconds
</script>