<?php


$disc_string = file_get_contents('dischi.json');
// var_dump($disc_string);

$lista_disc = json_decode($disc_string);
// var_dump($lista_disc);

if (isset($_POST['newDiscTitle'])) {
  $new_item = [
    'title' => $_POST['newDiscTitle'],
    'author' => $_POST['newDiscAuthor'],
    'poster' => $_POST['newDiscPoster'],
    'year' => $_POST['newDiscYear'],
    'gnre' => $_POST['newDiscGenre'],
  ];

  $lista_disc[] = $new_item;
  file_put_contents('dischi.json', json_encode($lista_disc));
}

header('Content-Type: application/json');

echo json_encode($lista_disc);
