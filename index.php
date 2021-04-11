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
        <link rel="stylesheet" href="styles/index.css">
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
            <section class="information--section">
                <div>
                    <div>
                        <h3>Algemeen</h3>
                        <p>
                            Een goede ICT’er is gedreven om te leren en is bereid om kennis te delen met anderen. Dat vinden ze bij het bedrijfsleven. 
                            Verder moet je wat willen bereiken, plezier hebben in wat je doet en goed in een team kunnen werken. 
                            Tijdens je studie aan de ICT-Academie krijg je hiermee te maken. Dat gebeurt zoveel mogelijk in projectvormen: 
                            leren werken en werkend leren in klein groepsverband, met opdrachten uit de praktijk. Teamwork dus. Belangrijk is verder de adviesraad, 
                            die bestaat uit vertegenwoordigers van vooraanstaande bedrijven uit de regio.
                        </p>
                    </div>
                    <div>
                        <h3>Algemeen</h3>
                        <p>
                            Een goede ICT’er is gedreven om te leren en is bereid om kennis te delen met anderen. Dat vinden ze bij het bedrijfsleven. 
                            Verder moet je wat willen bereiken, plezier hebben in wat je doet en goed in een team kunnen werken. 
                            Tijdens je studie aan de ICT-Academie krijg je hiermee te maken. Dat gebeurt zoveel mogelijk in projectvormen: 
                            leren werken en werkend leren in klein groepsverband, met opdrachten uit de praktijk. Teamwork dus. Belangrijk is verder de adviesraad, 
                            die bestaat uit vertegenwoordigers van vooraanstaande bedrijven uit de regio.
                        </p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Informatie</h3>
                        <p>Download de brochure van deze afdeling:</p>
                        <a href="https://www.kw1c.nl/media/afdeling/folders/811-ict-academie.pdf">Brochure in PDF</a>
                    </div>
                </div>
            </section>
        </main>
        <?php
            include "includes/footer.php"
        ?>
    </body>
</html>