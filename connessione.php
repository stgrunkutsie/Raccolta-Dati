<?php
$connessione = new mysqli('localhost', 'root', '', 'raccolta_dati');
if ($connessione -> connect_error) {
    die ('Connessione fallita: '.$connessione->connect_error);
} else {
    echo ("Connesso");
}

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$luogo = $_POST['luogo'];
$data = $_POST['data'];
$indirizzo = $_POST['indirizzo'];
$citta = $_POST['citta'];
$provincia = $_POST['provincia'];
$email = $_POST['email'];
$tipologia = $_POST['tipologia'];
$telefono = $_POST['telefono'];
$sql = "INSERT INTO utenti (nome, cognome, luogo, data, indirizzo, citta, provincia, email, tipologia, telefono) VALUES ('$nome', '$cognome', '$luogo', '$data', '$indirizzo', '$citta', '$provincia', '$email', '$tipologia', '$telefono')";

if ($connessione -> query($sql)) {
    //header("location: index.php");
} else {
    echo "Non funziona".$connessione->error;
}
header("location: visualizza.php");
$connessione->close();
?>