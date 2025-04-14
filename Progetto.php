<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prgetto1</title>
    <link href="Style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
    <?php
        include "components/header.php";
    ?>
    </header>
    <h1>Progetto 1</h1>    
    <img src="./img/progetto1.jpg" id="foto" alt="progetto1" width="800">
    <h3 id="h3progetto">Cosa abbiamo fatto</h3>
    <p id="progetto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione pariatur sunt, inventore deleniti saepe voluptate adipisci cum recusandae excepturi assumenda hic incidunt. Fugit facilis debitis ipsum veritatis eius quia et.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi atque aliquid repellat adipisci quo nobis, laboriosam quisquam natus ea ratione omnis assumenda distinctio necessitatibus similique officiis dolorem nisi animi at!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque tempore rem sapiente at placeat delectus ipsum nesciunt, aspernatur molestias ducimus aliquam iste enim beatae id repellendus quia, sint perspiciatis assumenda.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam aspernatur eum perferendis, tempore obcaecati itaque cupiditate asperiores necessitatibus nisi a ad doloribus explicabo laudantium porro quisquam exercitationem adipisci labore similique.
    </p>
    <form id="torna">
        <input type="button" value="guarda altri progetti" onclick="location.href='Progetti.php'">
    </form>
    <div id="teamwork">
    <img src="./img/teamwork.jpg" width="400" alt="teamwork">
    </div>
    <div class="text">
        <h3>teamwork</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quos natus dolorem maiores maxime ad iure explicabo ipsum suscipit corrupti qui dolores amet reprehenderit necessitatibus, quas accusantium non nesciunt quidem.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, dolores? Voluptas sequi quasi facilis optio unde a corrupti labore, sint libero amet fugiat quos voluptatibus magni accusamus, omnis deserunt nisi!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis voluptatem consequuntur repellat aperiam nemo illum quibusdam sit assumenda itaque omnis quas ducimus iusto quasi doloribus, reiciendis soluta totam facilis dignissimos?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum mollitia quidem earum amet sint, quia iure ea, maiores commodi itaque architecto. Accusantium doloremque iure voluptatem fugit tempora, omnis culpa. Earum.
        </p>
    </div>
    <form>
       <input type="button" value="torna alla pagina precedente" onclick="location.href='Index.php'">
    </form>
    <?php
    include "components/footer.php";
    ?>
</body>
</html>