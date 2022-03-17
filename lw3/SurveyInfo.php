<?php
header('Content-Type: text/plain');

function getParameter(string $paramName): ?string
{
    return isset($_GET[$paramName]) ? $_GET[$paramName] : null;
}

function look()
{
    $email = getParameter('email');
    $filename = "./data/$email.txt";
    if (file_exists($filename))
    {
        readfile($filename);
        return;
    }
    else
    {
        echo 'Не сушествует такого файла';
    }
}
look();
