<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Registrazione utente</h1>
    <form action="connessione.php" method="post" autocomplete="off">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required autofocus><br>
        <label for="cognome" required>Cognome: </label>
        <input type="text" name="cognome" id="cognome" required><br>
        <label for="luogo" required>Luogo di nascita: </label>
        <input type="text" name="luogo" id="luogo" required><br>
        <label for="data" required>Data di nascita: </label>
        <input type="date" name="data" id="data" required><br>
        <label for="indirizzo" required>Indirizzo di residenza: </label>
        <input type="text" name="indirizzo" id="indirizzo" required><br>
        <label for="citta" required>Città: </label>
        <input type="text" name="citta" id="citta" required><br>
        <label for="provincia" required>Provincia: </label>
        <input type="text" name="provincia" id="provincia" required><br>
        <label for="email" required>EMail: </label>
        <input type="text" name="email" id="email" required><br>
        <label for="tipologia" required>Tipo di utente: </label>
        <input type="text" name="tipologia" id="tipologia" required><br>
        <label for="telefono" required>Numero di telefono: </label>
        <input type="text" name="telefono" id="telefono" required><br>
        <input type="submit" value="Registrati">
    </form>
</body>
</html>