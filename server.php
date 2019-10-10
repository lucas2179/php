<?php
header("Expires: " . gmdate('D, d M Y H:i:s \G\M\T', time() - 3600));
echo "<h2>Enredeço IP</h2>";
echo "Endereço IP do POD: <br>"; 
echo $_SERVER['SERVER_ADDR'];
?>
