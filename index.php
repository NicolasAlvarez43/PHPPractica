<?php

#Iniciar curl
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
$data = json_decode($result,true);  // La variable, y lo guarda como array asociativo
curl_close($ch);

// Hacer lo mismopero otra forma
$resultv2 = file_get_contents(API_URL);
//print_r($data)
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Centered viewport -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
    <title>Document</title>
</head>
<main>

<section>
    <img src="<?=  $data["poster_url"];?>" width="300" > </img>    
    <hgroup>
    <h2>  <?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?>   </h2>
    <p> Fecha de estreno; <?= $data["release_date"]; ?></p>
    <p>La sig es :   <?= $data["following_production"]["title"]; ?></p>
</hgroup>
   
    </section>
</main>
<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display: grid;
        place-content: center;
    }
    img{
        margin: 0 auto
    }
    section{
        display: flex;
        justify-content: center;
    }
    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>