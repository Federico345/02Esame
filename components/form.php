<?php
// components/form.php
$errors = [];
$success = false;
$nome = $cognome = $email = $commento = "";

// Mostra messaggio di successo se presente nel GET
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $success = true;
}

// Gestione del form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars(trim($_POST["nome"] ?? ''));
    $cognome = htmlspecialchars(trim($_POST["cognome"] ?? ''));
    $email = htmlspecialchars(trim($_POST["email"] ?? ''));
    $commento = htmlspecialchars(trim($_POST["commento"] ?? ''));

    if (empty($nome)) $errors['nome'] = 'Il nome è obbligatorio.';
    if (empty($cognome)) $errors['cognome'] = 'Il cognome è obbligatorio.';
    if (empty($email) || !filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Email non valida.';
    if (empty($commento)) $errors['commento'] = 'Il commento è obbligatorio.';

    if (empty($errors)) {
        // Se tutto è ok: salvataggio + redirect
        $riga = "Nome: $nome | Cognome: $cognome | Email: $email | Commento: $commento" . PHP_EOL;
        file_put_contents("dati_salvati.txt", $riga, FILE_APPEND);
        header("Location: " . $_SERVER['PHP_SELF'] . "?success=1#form");
        exit;
    }
}
