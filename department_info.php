<?php
    require_once __DIR__ . "/server.php";
    // Prelevo il dipartimento cliccato
    $id = $_GET["id"];
    $sql = "SELECT * FROM `departments` WHERE `id`=$id;";
    $result = $conn->query($sql);
    var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info dipartimento</title>
</head>
<body>
    <h1>
        <?php
            echo $department
        ?>
    </h1>


</body>
</html>