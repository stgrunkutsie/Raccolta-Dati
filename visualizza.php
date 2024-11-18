<?php
$connessione = new mysqli('localhost', 'root', '', 'raccolta_dati');
if ($connessione -> connect_error) {
    die ('Connessione fallita: '.$connessione->connect_error);
} else {
    echo ("Connesso");
}

$sql = "SELECT * FROM utenti";
$result = $connessione->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border=1><tr><th>Nome</th><th>Cognome</th><th>Luogo di nascita</th><th>Data di nascita</th><th>Indirizzo di residenza</th><th>Città</th><th>Provincia</th><th>EMail</th><th>Tipo di utente</th><th>Numero di telefono</th></tr><tr>";
            while($row = $result->fetch_assoc()) {
                echo "<td>".$row["nome"]."</td><td>".$row["cognome"]."</td><td>".$row["luogo"]."</td><td>".$row["data"]."</td><td>".$row["indirizzo"]."</td><td>".$row["citta"]."</td><td>".$row["provincia"]."</td><td>".$row["email"]."</td><td>".$row["tipologia"]."</td><td>".$row["telefono"]."</td>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
$connessione->close();
?>