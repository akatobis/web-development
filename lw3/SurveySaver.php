<?php
header('Content-Type: text/plain');
function look()
{
    function getParameter(string $paramName): ?string
    {
        return isset($_GET[$paramName]) ? $_GET[$paramName] : null;
    }

    $firstName = getParameter('first_name');
    $lastName = getParameter('last_name');
    $email = getParameter('email');
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo 'Проверте правильность введённого email';
        return;
    }
    $age = getParameter('age');

    $fileName = "./data/$email.txt";
    if (file_exists($fileName)) 
    {
        $file = file($fileName);
        if (($firstName <> null) or ($firstName <> ''))
        {
            $file[0] = "First Namasdfge: $firstName \n";
        }
        if (($lastName <> null) or ($lastName <> ''))
        {
            $file[1] = "Last Name: $lastName \n";
        }
        if (($age <> null) or ($age <> ''))
        {
            $file[3] = "Age: $age \n";
        }
        file_put_contents($fileName, $file);
        return;
    }
    $fp = fopen("./data/$email.txt", 'w+');
    if (($firstName === '') or ($firstName === null))
    {
        fwrite($fp, 'First Name: ');
        fwrite($fp, "\n");
    }
    else
    {
        fwrite($fp, 'First Name: ');
        fwrite($fp, $firstName);
        fwrite($fp, "\n");
    }

    if (($lastName === '') or ($lastName === null))
    {
        fwrite($fp, 'Last Name: ');
        fwrite($fp, "\n");
    }
    else
    {
        fwrite($fp, 'Last Name: ');
        fwrite($fp, $lastName);
        fwrite($fp, "\n");
    }

    if (($email === null) or ($email === ''))
    {
        echo 'Нет параметра email', "\n";
        return;
    }
    else
    {
        fwrite($fp, 'Email: ');
        fwrite($fp, $email);
        fwrite($fp, "\n");
    }

    if (($age === '') or ($age === null))
    {
        fwrite($fp, 'Age: ');
        fwrite($fp, "\n");
    }
    else
    {
        fwrite($fp, 'Age: ');
        fwrite($fp, $age);
        fwrite($fp, "\n");
    }
    
    fclose($fp);
}
look();
