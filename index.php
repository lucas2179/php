<?php

echo "Digite o seu ID de conta na IBM Cloud: " 
echo "<form action=\"index.php\" method=\"post\">";
echo "<input type=\"text\" name=\"ent1\">";
echo "<input type=\"submit\">";

if(isset($_POST["ent1"])){
    $queue = $_POST["ent1"];
    $fh = fopen("temp.txt", 'a');
    fwrite($fh, $queue);
    fclose($fh);
}
?>
