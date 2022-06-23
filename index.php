<?php
require_once __DIR__ . "/server.php";
require_once __DIR__ . "/Department.php";

// Imposto query per database
$sql = "SELECT `id`, `name` FROM `departments`;";
$result = $conn->query($sql);
$departments = [];

// Controllo che il risultato ci sia e che non sia vuoto
if ($result && $result->num_rows > 0) {
    // Mostro i risultati
    while ($row = $result->fetch_assoc()) {
        // var_dump($row);
        $curr_department = new Department($row["id"], $row["name"]);
        $departments[] = $curr_department;
        // var_dump($departments);
    }

    
} elseif ($result) {
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
        <a href="department_info.php">Info dipartimento</a>
    <?php } ?>
</body>

</html>