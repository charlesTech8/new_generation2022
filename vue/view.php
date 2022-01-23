<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NewGeneration</title>
    </head>

    <body>

        <div>
            <?php
            //Menu de la page
            require_once('../vue/menu/header.php');
            ?>
        </div>
        <div>
            <?php
            //Contenu de la page
            //require_once('../controller/contenu.php');
            //require_once('../vue/public/forms/confirmation.liv.php');
            require_once('../vue/public/forms/livraison.php');
            ?>
        </div>
        <div>
            <?php
            // Pied de la page
            require_once('../vue/menu/footer.php');
            ?>
        </div>

        <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
    </body>

    </html>