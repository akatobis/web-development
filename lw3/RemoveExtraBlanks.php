<?php
header('Content-Type: text/plain');
function RemoveExtraBlanks($text){
   $text = trim($text, ' ');
   while(strpos($text, '  '))
      $text = str_replace("  ", " ", $text);
   echo $text;
}

echo RemoveExtraBlanks($_GET['text']);
