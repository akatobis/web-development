<?php
header('Content-Type: text/plain');
$email = 'ivan.ivanov@gmail.com';
$name = $email . '.txt';

$dir = '/data/'; // Директория для создания страниц
 
if (!file_exists($dir)){ // Если файл не существует, то создаем
   $fIn = fopen($dir.$name, 'w+'); // Создаем файл 
  }