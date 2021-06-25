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
            include "includes/header.php";
        ?>
        <main>
            <section class="intro">
                <div>
                    <h1>ICT-ACADEMIE</h1>
                    <h2>De toekomst in jouw handen</h2>
                    <a href="../pages/formulier.php" class="btn">Studiekeuzetest</a>
                </div>
            </section>
            <div class="streep"></div>
            <section class="information--section">
                <div class="container--left">
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
                        <h3>Video-impressie</h3>
                        <div class="iframe--container">
                            <iframe src="https://www.youtube.com/embed/yferSLtRBrI" frameborder="0"></iframe>
                        </div>
                    </div>
                    <div>
                        <h3>Domeinvideo Techniek</h3>
                        <div class="iframe--container">
                            <iframe src="https://www.youtube.com/embed/qa4lm5l_4K0" frameborder="0"></iframe>
                        </div>
                    </div>
                    <div>
                        <h3>Awardgenomineerde 2020: Tijs Manders</h3>
                        <p>Tijs Manders van de opleiding Netwerk- en mediabeheerder is genomineerd voor de Koning Willem I College Awards 2020!</p>
                        <div class="iframe--container">
                            <iframe src="https://www.youtube.com/embed/R3-ob-wAGQY" frameborder="0"></iframe>
                        </div>
                    </div>
                    <div class="studies--container">
                        <h3>Opleidingen binnen deze afdeling</h3>
                        <h4>Niveau 3 - Middelbaar Vakonderwijs</h4>
                        <ul>
                            <li>
                                <img src="images/arrow-black.svg" alt="arrow"><a target="_blank" href="https://www.kw1c.nl/opleiding/25605o10/allround-medewerker-it-systems-and-devices-bol">allround medewerker IT systems and devices(bol)</a><span> (Niveau 3)</span>
                            </li>
                        </ul>
                        <h4>Niveau 4 - Middelbaar Beroepsonderwijs</h4>
                        <ul>
                            <li>
                                <img src="images/arrow-black.svg" alt="arrow"><a target="_blank" href="https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol">expert IT systems and devices (bol)</a><span> (Niveau 4)</span>
                            </li>
                            <li>
                                <img src="images/arrow-black.svg" alt="arrow"><a target="_blank" href="https://www.kw1c.nl/opleiding/25604o10/software-developer-bol">software developer (bol)</a><span> (Niveau 4)</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container--right">
                    <div class="brochure--container">
                        <h3>Informatie</h3>
                        <p>Download de brochure van deze afdeling:</p>
                        <a target="_blank" href="https://www.kw1c.nl/media/afdeling/folders/811-ict-academie.pdf"><img src="images/download.svg" />Brochure in PDF</a>
                    </div>
                    <div class="contact--container">
                        <h3>Contact</h3>
                        <div>
                            <img src="images/phone.png" alt="phone"><a href="tel:0736249600">073 624 9 600</a> 
                        </div>
                        <div>
                            <img src="images/email.png" alt="phone"><a href="mailto:info@kw1c.nl">info@kw1c.nl</a>
                        </div>
                    </div>
                    <div class="links--container">
                        <h3>Heb je vragen? Wij geven jou advies:</h3>
                        <ul>
                            <li>
                                <img src="images/arrow.svg" alt="arrow"><a target="_blank" href="https://www.kw1c.nl/gesprek-met-studieadviseur">Gesprek met een studie­adviseur</a>
                            </li>
                            <li>
                                <img src="images/arrow.svg" alt="arrow"><a target="_blank" href="https://www.kw1c.nl/gesprek-met-leraar/afdeling/811">Gesprek met een leraar</a>
                            </li>
                            <li>
                                <img src="images/arrow.svg" alt="arrow"><a target="_blank" href="https://www.kw1c.nl/bezoek-en-ontdek/afdeling/811">Bezoek & Ontdek</a>
                            </li>
                            <li>
                                <img src="images/arrow.svg" alt="arrow"><a target="_blank" href="https://www.kw1c.nl/stel-je-vraag">Stel je vraag online</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>