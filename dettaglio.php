<?php

$portfolio = json_decode(file_get_contents('portfolio.json'), true);


$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$progetto = array_filter($portfolio, function ($item) use ($id) {
    return $item['id'] === $id;
});

if (empty($progetto)) {
    die("Progetto non trovato.");
}

$progetto = array_values($progetto)[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $progetto['titolo'] ?></title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <?php include "components/header.php"; ?>
    </header>
    <main>
        <h1><?= $progetto['titolo'] ?></h1>
        <img src="<?= $progetto['immagine'] ?>" alt="<?= $progetto['titolo'] ?>" width="600">
        <div class="teamwork">
            <h3><?= $progetto['teamwork']['titolo'] ?></h3>
            <?= $progetto['teamwork']['contenuto'] ?>
        </div>
        
        <div class="teamwork">
        <h2><?= $progetto['sottotitolo'] ?></h2>
        <?= $progetto['teamwork']['descrizione'] ?>
        </div>
        <div class="button-container">
          <a href="Progetti.php" class="btn-back">Guarda altri progetti</a>
        </div>
    </main>
    <footer>
        <?php include "components/footer.php"; ?>
    </footer>
</body>
</html>