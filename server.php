<?php


$disc_string = file_get_contents('dischi.json');
var_dump($disc_string);

$lista_disc = json_decode($disc_string);
var_dump($lista_disc);
