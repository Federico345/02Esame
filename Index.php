<?php
ob_start(); // Inizia il buffer per evitare errori di header
require_once 'components/form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fede Stef</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
    <style>
        .error { color: red; }
        .input-error { border: 1px solid red; }
    </style>
</head>
<body class="body">
    <header id="header">
        <div id="sfondo">
        <div id="grigio">
        <?php include "components/header.php"; ?>
        </div>
        </div>
        <div id="testo"><h1>Pensando in grande </h1>
        <p id="testostoria">Lorem ipsum dolor sit amet consectetur adipisicing eli Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium incidunt libero ab maxime at necessitatibus, corporis numquam, sint temporibus ratione vitae, aut perferendis sunt asperiores magni aliquam veniam laborum aliquid.</p>
        </div>
    </header>
    <main>
        <div id="contenitores">
        <img src="./img/web-developer.jpg" width="600" alt="principale" id="foto1">
        <div class="cosa">
        <div><h2>Chi sono e cosa faccio</h2></div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil sequi porro eveniet. Inventore, nisi quod nostrum totam voluptatibus eveniet accusamus rem veniam id odio, facilis sequi a repellendus quisquam nobis....</p>
        </div>
        </div>
        <section class="sezione1">
             <h2 id="titolocontatti">Contatti ed informazioni</h2>
             <div id="numeromail">
             <h3>di seguito i vari contatti e i nostri social per restare sempre aggiornati su novità nel settore.</h3>
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
            <h3>Richiedi informazioni</h3>
            <div class="commenti">
                <h3>Lascia qualche tuo dettaglio per fare delle domande e per prendere un appuntamento</h3>
                <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <div class="success-message" style="color: green; font-weight: bold;">
                        ✅ Il tuo commento è stato inviato con successo!
                    </div>
                <?php endif; ?>
                <form action="<?= htmlspecialchars(string: $_SERVER['PHP_SELF']) ?>" method="post" novalidate id="form">
                    <label for="Nome">Nome:</label>
                    <input type="text" name="nome" id="Nome" value="<?= htmlspecialchars($nome) ?>"
                        class="<?= isset($errors['nome']) ? 'input-error' : '' ?>">
                    <?php if (isset($errors['nome'])): ?>
                        <span class="error"><?= $errors['nome'] ?></span>
                    <?php endif; ?>
                    <br><br>
                
                    <label for="Cognome">Cognome:</label>
                    <input type="text" name="cognome" id="Cognome" value="<?= htmlspecialchars($cognome) ?>"
                        class="<?= isset($errors['cognome']) ? 'input-error' : '' ?>">
                    <?php if (isset($errors['cognome'])): ?>
                        <span class="error"><?= $errors['cognome'] ?></span>
                    <?php endif; ?>
                    <br><br>
                
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>"
                        class="<?= isset($errors['email']) ? 'input-error' : '' ?>">
                    <?php if (isset($errors['email'])): ?>
                        <span class="error"><?= $errors['email'] ?></span>
                    <?php endif; ?>
                    <br><br>
                
                    <label for="commento">Commento:</label>
                    <textarea name="commento" id="commento" rows="5" cols="30"
                        class="<?= isset($errors['commento']) ? 'input-error' : '' ?>"><?= htmlspecialchars($commento) ?></textarea>
                    <?php if (isset($errors['commento'])): ?>
                        <span class="error"><?= $errors['commento'] ?></span>
                    <?php endif; ?>
                    <br><br>
                
                    <button type="submit">Invia</button>
                </form>
            </div>
        </section>
    </main>
    <?php if (!empty($errors)): ?>
            <script>location.hash = "#form";</script>
        <?php endif; ?>
    <?php include "components/footer.php"; ?>
</body>
</html>
<?php ob_end_flush();?>