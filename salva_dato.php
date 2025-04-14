<?php
$errors = [];
$nome = $cognome = $email = $commento = ""; // Inizializzazione delle variabili

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
        echo "<p style='color: green;'>Form inviato correttamente!</p>";
        $nome = $cognome = $email = $commento = ""; // Resetta i campi
    }
}

?>