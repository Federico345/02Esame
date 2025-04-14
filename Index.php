<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fede Stef</title>
    <link href="Style.css" type="text/css" rel="stylesheet">
</head>
<body class="body">
    <header id="header">
        <div id="sfondo">
        <div id="grigio">
        <?php
        include "components/header.php";
        ?>
        </div>
        </div>
        <div id="testo"><h1>Pensando in grande </h1>
        <p id="testostoria">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nam, consequuntur mollitia quidem inventore vitae debitis magnam perferendis eius provident excepturi at eum doloremque cum, asperiores harum cumque incidunt. Magnam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, esse nulla obcaecati suscipit unde optio eveniet autem qui quis corporis ullam id hic error dolore velit. Repellat, quod consectetur? Distinctio!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit a fuga quisquam optio impedit suscipit aliquid, tempora quibusdam voluptate rerum necessitatibus nostrum reiciendis error esse maiores explicabo iusto labore doloremque.
        </p>
        </div>
    </header>
    <main>
        <div id="contenitores">
        <img src="./img/web-developer.jpg" width="600" alt="principale" id="foto1">
        <div class="cosa">
        <div><h2>Chi sono e cosa faccio</h2></div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, 
        maxime quia! Dolore nihil voluptate voluptatem? Voluptatem adipisci repellendus corrupti unde reprehenderit impedit 
        fuga architecto! Mollitia debitis ipsum quidem cupiditate consequatur?
        </p>
        </div>
        </div>
        <section class="sezione1">
             <h2 id="titolocontatti">Contatti ed informazioni</h2>
             <div id="numeromail">
             <h3>di seguito i vari contatti e i nostri social per restare sempre aggionati su novità nel settore.</h3>
            <a href="mailto:example@gmail.com">qui trovi la mail</a><br><br>
            <a href="tel:3333333333">il nostro numero di telefono: 3333333333</a>
            <p>la nostra sede:</p>
            <address>Via pincopallo 2/A</address>
            </div>
            <a href="https://www.google.it/maps" title="maps">
            <img src="./img/mappa.webp" width="800" alt="mappa" title="maps">
            </a>

        </section>
            
            <section class="sezione2">
                    <h2 id="info">Info</h2>
                    <h3>Richedi informazioni</h3>
                    <div class="commenti">
                        <h3>Lascia qualche tuo dettaglio per fare delle domande e per prendere un appuntamento</h3>
                        
                    <?php
                    include "components/form.php";
                    ?>
            </section>
    </main>
    <?php
    include "components/footer.php";
    ?>
</body>
</html>