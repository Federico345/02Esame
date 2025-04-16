<?php
// filepath: c:\xampp\htdocs\PHP\Esame02(1)\salva_dato.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati dal form
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $cognome = htmlspecialchars(trim($_POST["cognome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $commento = htmlspecialchars(trim($_POST["commento"]));

    // Salva i dati nel file
    $riga = "Nome: $nome | Cognome: $cognome | Email: $email | Commento: $commento" . PHP_EOL;
    $file = "dati_salvati.txt";

    file_put_contents($file, $riga, FILE_APPEND);
}

?>

<?php

if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<p style='color: green; text-align: center; font-size: 20px;'>I dati sono stati salvati correttamente!</p>";
} else {
    echo "<p style='color: red; text-align: center; font-size: 20px;'>Errore: Accesso non autorizzato.</p>";
}
?>