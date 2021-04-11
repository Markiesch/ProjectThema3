<!-- 
    Author: Mark Schuurmans
    Date: 11-4-2021
    File: pages/404.php
 -->
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/ProjectThema3/styles/stylesheet.css">
        <link rel="stylesheet" href="/ProjectThema3/styles/404.css">
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
        <script src="scripts/script.js" defer></script>
        <title>ICT-Academie - Koning Willem I College</title>
    </head>
    <body>
        <?php 
            include "../includes/header.php";
        ?>
        <main>
            <h2>PAGINA NIET GEVONDEN - 404</h2>
            <div class="streep"></div>
            <section>
                <div>
                    <p>De gevraagde pagina is helaas niet gevonden.</p>
                    <p>Probeer het later nog eens, of kies één van de volgende opties:</p>
                    <a href="/ProjectThema3/index.php">Home</a>
                </div>
            </section>
        </main>
        <?php
            include "../includes/footer.php";
        ?>
    </body>
</html>