<?php
$myfile = fopen("index.php", "r")
echo fread($myfile,filesize("index.php"));
fclose($myfile);
?>