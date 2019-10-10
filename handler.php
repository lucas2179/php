<?php
    	if(isset($_POST["ent1"])){
    		$queue = $_POST["ent1"];
    		$fh = fopen("temp.txt", 'a');
    		fwrite($fh, $queue);
    		fwrite($fh, "\r\n");
    		fclose($fh);
		}
	?>
