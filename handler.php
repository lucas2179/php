<?php
<<<<<<< HEAD
    	if(isset($_POST["ent1"])){
=======
    	if(isset($_GET["ent1"])){
>>>>>>> 7096aec60184ea13eaef2d82d3711909d827245a
    		$queue = $_POST["ent1"];
    		$fh = fopen("temp.txt", 'a');
    		fwrite($fh, $queue);
    		fwrite($fh, "\r\n");
    		fclose($fh);
<<<<<<< HEAD
		}
	?>
=======
		echo "Digite seu ID da IBM Cloud: <br>";
	}
?>
>>>>>>> 7096aec60184ea13eaef2d82d3711909d827245a
