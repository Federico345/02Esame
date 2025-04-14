<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetti</title>
    <link href="Style.css" type="text/css" rel="stylesheet">
</head>
<body class="body">
    <header>
    <?php
        include "components/header.php";
    ?>
        <div class="PROGETTI">
        <h1>PROGETTI</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus dolor impedit odit autem enim amet vero cupiditate mollitia, dolorum labore fuga deserunt quas? Sunt, quae libero recusandae officiis culpa quo!</p>
        </div>
    </header>
    <div class="paginaprogetti">
    <div class="progetto1">
    <h3>Progetto uno</h3>
    <img src="./img/immaginepag.principale.jpg" alt="progetto1" width="600">
    <form>
        <input type="button" value="visona il progetto" onclick="location.href='Progetto.php'">        
    </form>
    </div>
    <div class="progetto2">
    <h3>Progetto due</h3>
    <img src="./img/immaginepag.principale.jpg" alt="progetto2" width="600">
    <form>
        <input type="button" value="visona il progetto" onclick="location.href='Progetto.php'">
    </form>
    </div>
    <div class="progetto3">
    <h3>Progetto tre</h3>
    <img src="./img/immaginepag.principale.jpg" alt="progetto3" width="600">
    <form>
        <input type="button" value="visona il progetto" onclick="location.href='Progetto.php'">
    </form>
    </div>
    <div class="progetto4">
    <h3>Progetto quattro</h3>
    <img src="./img/immaginepag.principale.jpg" alt="progetto4" width="600">
    <form>
        <input type="button" value="visona il progetto" onclick="location.href='Progetto.php'">
    </form>
    </div>
    </div>
    <?php
    include "components/footer.php";
    ?>
</body>
</html>