<?php
function getFileSubstring(?string $fileString): ?string
{
   return (trim(substr($fileString, strpos($fileString, ':') + 1)));
}

$files = scandir('./data');
array_shift($files);
array_shift($files);
$out = [];

foreach($files as $file)
{
   $array = file("./data/$file");
   $email = getFileSubstring($array[0]);
   $name = getFileSubstring($array[1]);
   $activity = getFileSubstring($array[2]);

   $data = array(
      "name" => $name,
      "email" => $email,
      "activity" => $activity
   );
   array_push($out, $data);
}

echo json_encode($out, JSON_FORCE_OBJECT);
