<?php
$portfolio = json_decode(file_get_contents('portfolio.json'), true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetti</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body class="body">
    <header>
        <?php include "components/header.php"; ?>
        <div class="PROGETTI">
            <h1>PROGETTI</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolor impedit odit autem enim amet vero cupiditate mollitia, dolorum labore fuga deserunt quas? Sunt, quae libero recusandae officiis culpa quo!</p>
        </div>
    </header>
    <main>
        <div class="paginaprogetti">
            <?php foreach ($portfolio as $progetto): ?>
                <div class="progetto">
                    <h2>
                        <a href="dettaglio.php? id=<?= $progetto['id'] ?>">
                            <?= $progetto['titolo'] ?>
                        </a>
                    </h2>
                    <img src="<?= $progetto['immagine'] ?>" alt="<?= $progetto['titolo'] ?>" width="600">
                    <form>
                        <input type="button" value="Visualizza il progetto" onclick="location.href='dettaglio.php?id=<?= $progetto['id'] ?>'">
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <?php include "components/footer.php"; ?>
    </footer>
</body>
</html>