<?php
$dischi = file_get_contents('dischi.json');
$dischi = json_decode($dischi, true);
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
            <?php foreach ($dischi as $disco) {

                echo
                "<div class='card' style='width: 18rem;'>
                    <img src='{$disco['cover']}' class='card-img-top' alt='{$disco['titolo']}'>
                        <div class='card-body'>
                            <p class='card-text'>
                                Titolo: {$disco['titolo']}<br>
                                Artista: {$disco['artista']}<br>
                                Anno: {$disco['anno']}<br>
                                Genere: {$disco['genere']}
                            </p>
                        </div>
                </div>";
            } ?>
        </div>
        <hr>
        <div class="container">
            <h2 class="text-center m-2">Aggiungi il tuo album!</h2>
            <form action="server.php" method="post" class="d-flex flex-column gap-2 mb-3">

                    <input type="text" id="titolo" name="titolo" placeholder="Titolo">
                    <input type="text" id="artista" name="artista" placeholder="Artista">
                    <input type="number" id="anno" name="anno" placeholder="Anno">
                    <input type="text" id="genere" name="genere" placeholder="Genere">
                    <input type="url" id="cover" name="cover" placeholder="Cover"value="https://placedog.net/360/480/pixelate">
                    <button type="submit" class="btn btn-primary">Aggiungi</button>

            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>