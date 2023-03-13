<?php 
$fp = fopen('sample.txt','w');
fwrite($fp,"This is q1 of Practical 6 of WT subject.");
echo "Content written successfully";
fclose($fp);
?>