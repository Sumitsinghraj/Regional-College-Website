<?php
$str="this is a string";
$lenn=strlen($str);
echo "the length of string is=". $lenn ."thank u";
echo "the reverse of the string is=" .strrev($str) ."thank u";
echo "the search for word is of the string is=" .strpos($str,"is") ."thank u";
echo "the replaced string is=" .str_replace("is","at",$str,) ."thank u";
echo $lenn;
?>