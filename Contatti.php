<?php
// Inizializzazione delle variabili
$errors = [];
$nome = $cognome = $email = $commento = "";


// Gestione del form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $cognome = htmlspecialchars(trim($_POST["cognome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $commento = htmlspecialchars(trim($_POST["commento"]));

    // Validazione dei campi
    if (empty($nome)) {
        $errors['nome'] = 'Il nome è obbligatorio.';
    }

    if (empty($cognome)) {
        $errors['cognome'] = 'Il cognome è obbligatorio.';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'L\'email non è valida.';
    }

    if (empty($commento)) {
        $errors['commento'] = 'Il commento è obbligatorio.';
    }

    // Se non ci sono errori, salva i dati

    if (empty($errors)) {
        $riga = "Nome: $nome | Cognome: $cognome | Email: $email | Commento: $commento" . PHP_EOL;
        $file = "dati_salvati.txt";
        file_put_contents($file, $riga, FILE_APPEND);
        
        header("Location: salva_dato.php?success=1");
        
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <style>
        .error { color: red; }
        .input-error { border: 1px solid red; }
    </style>
</head>
<body>
    <header>
    <?php
        include "components/header.php";
    ?>
    </header>
    <h1>Contatti </h1>
    <main>
        <section class="contatti-container">
            <p>Di seguito i vari contatti e i nostri social per restare sempre aggiornati su novità nel settore.</p>
            <a href="mailto:example@gamil.com">qui trovi la mail</a><br>
            <a href="tel:3333333333">il nostro numero di telefono: 3333333333</a>
            <p>La nostra sede:</p>
            <address>Via pincopallo 2/A</address>
            <a href="https://www.google.it/maps" title="maps">
            <img src="./img/mappa.webp" width="600" alt="mappa">
            </a>
        </section>
        <section class="sezione1">
            <h2 id="info">Info</h2>
            <h3>Richiedi informazioni</h3>
            <p>Lascia qualche tuo dettaglio per fare delle domande e per prendere un appuntamento</p>
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" novalidate>
                    <label for="Nome">Nome:</label>
                    <input type="text" name="nome" id="Nome" placeholder="Nome"
                           value="<?= htmlspecialchars($nome) ?>"
                           class="<?= isset($errors['nome']) ? 'input-error' : ''; ?>">
                    <?php if (isset($errors['nome'])): ?>
                        <span class="error"><?= $errors['nome'] ?></span>
                    <?php endif; ?>
                    <br><br>

                    <label for="Cognome">Cognome:</label>
                    <input type="text" name="cognome" id="Cognome" placeholder="Cognome"
                           value="<?= htmlspecialchars($cognome) ?>"
                           class="<?= isset($errors['cognome']) ? 'input-error' : ''; ?>">
                    <?php if (isset($errors['cognome'])): ?>
                        <span class="error"><?= $errors['cognome'] ?></span>
                    <?php endif; ?>
                    <br><br>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                           value="<?= htmlspecialchars($email) ?>"
                           class="<?= isset($errors['email']) ? 'input-error' : ''; ?>">
                    <?php if (isset($errors['email'])): ?>
                        <span class="error"><?= $errors['email'] ?></span>
                    <?php endif; ?>
                    <br><br>

                    <label for="commento">Commento:</label>
                    <textarea name="commento" id="commento" placeholder="Scrivi un commento..."
                              rows="5" cols="30"
                              class="<?= isset($errors['commento']) ? 'input-error' : ''; ?>"><?= htmlspecialchars($commento) ?></textarea>
                    <?php if (isset($errors['commento'])): ?>
                        <span class="error"><?= $errors['commento'] ?></span>
                    <?php endif; ?>
                    <br><br>

                    <button type="submit">Invia</button>
                </form>        
            </section>
    </main>
    <?php
    include "components/footer.php";
    ?>
</body>
</html>