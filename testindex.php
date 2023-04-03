<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <form action="/menu.php" method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Votre commande</h1>

        <p class="row">
            <label for="entry" class="form-label">Entrée : </label>
            <input type="text" name="entry" id="entry" class="form-control">
        </p>

        <p class="row">
            <label for="mainCourse" class="form-label">Plat principal : </label>
            <input type="text" name="mainCourse" id="mainCourse" class="form-control">
        </p>

        <p class="row">
            <label for="dessert" class="form-label">Dessert : </label>
            <input type="text" name="dessert" id="dessert" class="form-control">
        </p>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>