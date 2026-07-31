<?php

$dischi_text = file_get_contents('./dischi.json'); // coverto il json in una stringa php
// echo $dischi_text;


$dischi = json_decode($dischi_text, true); // prende la stringa php e la converte in una array associativa php


// aggiungiamo un nuovo disco all'array associativo
$dischi[] = [
    'titolo' => $_POST['titolo'],
    'artista' => $_POST['artista'],
    'anno' => $_POST['anno'],
    'genere' => $_POST['genere'],
    'cover' => $_POST['cover']
];
// var_dump($dischi);

// convertiamo la struttura dati php in json
$dischi_text_updated = json_encode($dischi, JSON_PRETTY_PRINT);

// sovrascriviamo il file dischi.json con la nuova struttura dati
file_put_contents('./dischi.json', $dischi_text_updated);

// reindirizziamo l'utente alla pagina index.php
header('Location: index.php');

?>