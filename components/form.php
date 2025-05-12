<?php
// Assicurati che le variabili siano definite
$nome = $nome ?? '';
$cognome = $cognome ?? '';
$email = $email ?? '';
$errors = $errors ?? [];
?>

<form action="/salva_dato.php" method="post" id="form" novalidate>
    <label for="Nome">Nome:</label>
    <input type="text" name="nome" id="Nome" placeholder="Nome"
    value="<?= htmlspecialchars($nome) ?>"
    class="<?= isset($errors['nome']) ? 'input-errore' : '' ?>">
    
    <?php if (isset($errors['nome'])): ?>
        <span class="errore"><?= $errors['nome'] ?></span><br>
    <?php endif; ?>

    <div><label for="Cognome">Cognome:</label></div>
    <input type="text" name="cognome" id="Cognome" placeholder="Cognome" 
    value="<?= htmlspecialchars($cognome) ?>"
    class="<?= isset($errors['cognome']) ? 'input-errore' : '' ?>">
    
    <?php if (isset($errors['cognome'])): ?>
        <span class="errore"><?= $errors['cognome'] ?></span><br>
    <?php endif; ?>
    
    <div><label for="email">email:</label></div>
    <input type="email" id="email" name="email" required="required" placeholder="email"
    value="<?= htmlspecialchars($email) ?>"
    class="<?= isset($errors['email']) ? 'input-errore' : '' ?>">
    
    <?php if (isset($errors['email'])): ?>
        <span class="errore"><?= $errors['email'] ?></span><br>
    <?php endif; ?>
    <div><label for="commento">Scrivi una breve descrizione per farci capire come poterti aiutare nel miglior modo</label></div>
    <textarea placeholder="commento..." name="commento" rows="15" cols="70" id="commento"></textarea>
    <div><button type="submit" value="submit">Vai!!</button></div>
</form>


