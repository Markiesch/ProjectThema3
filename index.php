<!-- 
    Author: Mark Schuurmans
    Date: 31-3-2021
    File: index.php
 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/stylesheet.css">
        <link rel="stylesheet" href="styles/includes.css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <script src="scripts/script.js" defer></script>
        <title>ICT-Academie - Koning Willem I College</title>
    </head>
    <body>
        <?php 
            include "includes/header.php"
        ?>
        <main>
            <section class="intro">
                <div>
                    <h1>ICT-ACADEMIE</h1>
                    <h2>De toekomst in jouw handen</h2>
                    <a href="pages/formulier" class="btn">Studiekeuzetest</a>
                </div>
            </section>
            <div class="streep"></div>
            <section>
                <div></div>
                <div></div>
            </section>
        </main>
        <?php
            include "includes/footer.php"
        ?>
    </body>
</html>