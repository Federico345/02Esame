<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
    <link href="Style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
    <?php
        include "components/header.php";
    ?>
    </header>
    <h1>Contatti</h1>
    <main>
        <section class="contatti-container">

            <p>di seguito i vari contatti e i nostri social per restare sempre aggionati su novità nel settore.</p>
            <a href="mailto:example@gamil.com">qui trovi la mail</a><br><br>
            <a href="tel:3333333333">il nostro numero di telefono: 3333333333</a>
            <p>la nostra sede:</p>
            <address>Via pincopallo 2/A</address>
            <a href="https://www.google.it/maps" title="maps">
            <img src="./img/mappa.webp" width="600" alt="mappa">
            </a>
        </section>
        <section class="sezione1">
                <h2 id="info">info</h2>
                <h3>Richiedi informazioni</h3>
                <p>Lascia qualche tuo dettaglio per fare delle domande e per prendere un appuntamento</p>
                <div><label for="Nome">Nome:</label></div>
                <form action ="salva_dato.php" method="post" id="form" novalidate>
                    <input type="text" name="nome" id="Nome" placeholder="Nome">
                    <div><label for="Cognome">Cognome:</label></div>
                    <input type="text" name="cognome" id="Cognome" placeholder="Cognome">
                    <div><label for="email">email:</label></div>
                    <input type="email" id="email" name="email" required="required" placeholder="email">
                    <div><label for="commento">Scrivi una breve descrizione per farci capire come poterti aiutarti nel miglior modo</label></div>
                    <textarea placeholder="commento..." name="commento" rows="15" cols="70" id="commento" ></textarea>
                    <div><button type="submit" value="submit">Vai!!</button></div> 
                </form>
        </section>
    </main>
    <?php
    include "components/footer.php";
    ?>
</body>
</html>