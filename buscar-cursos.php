<?php
$client = new \GuzzleHttpzClient();
$resposta = $client->request("GET", "https://www.alura.com.br/cursos-online-programacao/php");

$html = $resposta->getBody();