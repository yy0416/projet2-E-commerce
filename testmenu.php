<?php

$entry = $_POST['entry'];
$mainCourse = $_POST['mainCourse'];
$dessert = $_POST['dessert'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container bg-light border rounded p-5">
        <h1>Votre menu sera donc ...</h1>
        <ul>
            <li>Entrée : <span class="fw-bold"><?= $entry ?></span></li>
            <li>Plat principale : <span class="fw-bold"><?= $mainCourse ?></span></li>
            <li>Dessert : <span class="fw-bold"><?= $dessert ?></span></li>
        </ul>

        <h1 class="text-center mt-5">Bon appétit ! 😄</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>