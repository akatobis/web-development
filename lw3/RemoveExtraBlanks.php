<?php
header('Content-Type: text/plain');
$text = $_GET["text"];
$text = trim($text, ' ');
while(strpos($text, '  '))
   $text = str_replace("  ", " ", $text);
echo $text;

