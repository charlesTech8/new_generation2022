<?php 
require_once('../modele/general/generalFonction.php'); 

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../modele/general/fichiercss.css">
        <title>NEWGENERATION</title>
    </head>
    <body>
       
        <div>
            <?php
            //Menu de la page
            require_once('../vue/menu/menu.php');
            ?>
        </div>
        <div>
            <?php
            //Contenu de la page
            require_once('contenu.php');
            ?>
        </div>
        <div>
            <?php
            // Pied de la page
            require_once('../vue/menu/footer.php');
            ?>
        </div>
 
    </body>
</htm>

</html>