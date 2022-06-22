<?php
require_once __DIR__ . "/server.php";

// Imposto query per database
$departmentsDB = "SELECT * FROM `departments`;";
$result = $conn->query($departmentsDB);

// Controllo che il risultato ci sia e che non sia vuoto
if ($result && $result->num_rows > 0) {
    // Mostro i risultati
    while ($row = $result->fetch_assoc()) {
        // var_dump($row);
    }
} elseif ($result && $result->num_rows = 0) {
    // Query è corretta ma non ci sono risultati
    echo "Non ci sono risultati";
} else {
    // Errore nella query
    echo "Errore nella query";
    die();
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($result as $department) { ?>
        <h2>
            <?php
                echo $department["name"];
            ?>
        </h2>
        <a href="">Info dipartimento</a>
    <?php } ?>
</body>

</html>