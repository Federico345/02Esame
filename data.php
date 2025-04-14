<?php

$jsonData = file_get_contents("contact_data.json");
$data = json_decode($jsonData, true);
print_r($data); 
$persone = $data["persone"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
   <style>
    body{
        background-color: white;
        color: black;
    }
   </style>

</head>
<body>
    <h1>Persone</h1>
    <ul>
        <li>
             <?php
            foreach ($persone as $item){
                echo "nome:" . htmlspecialchars($item["nome"]) . "<br>";
                 echo "Cognome:" . htmlspecialchars($item["cognome"]) . "<br>";
                 echo "Età:" . htmlspecialchars($item["eta"]) . "<br>";
            }
            ?>
        </li>
    </ul>
</body>    
</html>
