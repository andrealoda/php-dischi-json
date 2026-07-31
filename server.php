<?php
// Recupero i dati dal form inviato tramite POST
// echo $_POST['titolo'];
// echo $_POST['artista'];
// echo $_POST['anno'];
// echo $_POST['genere'];
// echo $_POST['cover'];

//legge il contenuto del file JSON
$dischi_text = file_get_contents('./dischi.json');
// echo $dischi_text;

// convertiamo la stringa da json a dati php
$dischi = json_decode($dischi_text, true);

//modifichiamo la struttura dati php

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

// scriviamo il nuovo contenuto nel file json
file_put_contents('./dischi.json', $dischi_text_updated);

//dirottiamo l'utente alla pagina index.php
header('Location: index.php');

?>