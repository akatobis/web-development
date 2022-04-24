<?php
header('Content-Type: text/plain');

function look()
{
   $email = htmlspecialchars($_POST["email"]);
   if (($email === null) or($email === ''))
   {
      echo 'Введите email';
      return;
   }
   $filename = "./data/$email.txt";
   if (file_exists($filename))
   {
      readfile($filename);
      return;
   }
   else 
   {
      echo 'Данного файла не существует';
   }
}
look();
