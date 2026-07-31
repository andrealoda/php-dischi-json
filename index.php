<?php
$dischi = [
    [
        "titolo" => "The Dark Side of the Moon",
        "artista" => "Pink Floyd",
        "cover" => "https://placedog.net/500/500?random=1",
        "anno" => 1973,
        "genere" => "Progressive Rock"
    ],
    [
        "titolo" => "Live at Wembley 86",
        "artista" => "Queen",
        "anno" => 1992,
        "cover" => "https://placedog.net/500/500?random=2",
        "genere" => "Rock"

    ],
    [
        "titolo" => "Ten's Summoner's Tales",
        "artista" => "Sting",
        "anno" => 1993,
        "cover" => "https://placedog.net/500/500?random=3",
        "genere" => "Pop Rock"

    ],
    [
        "titolo" => "Steve Gadd Band",
        "artista" => "Steve Gadd Band",
        "anno" => 2018,
        "cover" => "https://placedog.net/500/500?random=4",
        "genere" => "Jazz"
    ],
    [
        "titolo" => "Brave new World",
        "artista" => "Iron Maiden",
        "anno" => 2000,
        "cover" => "https://placedog.net/500/500?random=5",
        "genere" => "Heavy Metal"
    ],
    [
        "titolo" => "One more car, one more rider",
        "artista" => "Eric Clapton",
        "anno" => 2002,
        "cover" => "https://placedog.net/500/500?random=6",
        "genere" => "Rock"
    ]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container border border-primary mt-2 mx-auto bg-primary-subtle">
        <nav class="navbar bg-body-tertiary mt-2">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://placedog.net/360/480/pixelate" alt="Bootstrap" width="30" height="24">
                </a>
            </div>
        </nav>

        <h1 class="text-center m-2">php-dischi</h1>
<div class="container d-flex flex-wrap justify-content-center gap-2 pb-3">
        <?php foreach ($dischi as $disco => $value) {

echo "<div class='card' style='width: 18rem;'>
  <img src='{$value['cover']}' class='card-img-top' alt='{$value['titolo']}'>
  <div class='card-body'>
    <p class='card-text'>
        Titolo: {$value['titolo']}<br>
        Artista: {$value['artista']}<br>
        Anno: {$value['anno']}<br>
        Genere: {$value['genere']}
    </p>
  </div>
</div>";


        } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</body>

</html>