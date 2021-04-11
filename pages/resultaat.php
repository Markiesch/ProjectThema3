<!--
    Author: Tobi de Fijter
    Date: 1-4-2021
    File: formulier.php
 -->

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/resultaat.css">
    <script src="../scripts/script.js" defer></script>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <title>ICT-Academie - Koning Willem I College</title>
</head>
    <body>
        <?php
            include "../includes/header.php";
        ?>
        <main>
            <section class="intro" class="information--section">
                <div>
                    <h1>ICT-ACADEMIE</h1>
                    <h2>De toekomst in jouw handen</h2>
                </div>
            </section>
            <div class="streep"></div>
            <section class="information--section">
                <div>
                    <div>
                        <h3>Resultaat</h3><br>
                        <p>Bij jou past de opleiding " ….……... " het beste.
                        Jij hebt de juiste eigenschappen voor deze opleiding
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    </div>
                </div>
                <div>
                    <div id="contact">
                        <h3>Contact</h3>
                        <div title="Bel het Studenten Succes Centrum">
                            <img src="../images/phone.png" alt="phone">
                            <a href="tel:073 624 9 600">073 624 9 600</a>
                        </div>
                        <div title="Stuur een e-mail naar het Studenten Succes Centrum" id="aligntelephone">
                            <img src="../images/email.png" alt="mail">
                            <a href="mailto:info@kwc1.nl">info@kwc1.nl</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="result--section">   
                <div class="resultCard">
                        <div id="cardBgsoft" class="cardBgPosition"></div>
                        <div class="cardContent">
                            <h3>Software Developer</h3>
                            <p>Je hebt .... punten behaald.</p>
                            <p class="toelichting">
                            Lorem Ipsum is simply dummy text of the 
                            printing and typesetting industry. Lorem 
                            Ipsum has been the industry's standard 
                            dummy text ever since the 1500s
                            </p>
                            <a href="https://www.kw1c.nl/opleiding/25604o10/software-developer-bol" target="_blank">Lees meer</a>
                        </div>
                    </div> 
                    <div class="resultCard">
                        <div id="cardBgict" class="cardBgPosition"></div>
                        <div class="cardContent">
                            <h3>ICT Beheer</h3>
                            <p>Je hebt .... punten behaald.</p>
                            <p class="toelichting">
                            Lorem Ipsum is simply dummy text of the 
                            printing and typesetting industry. Lorem 
                            Ipsum has been the industry's standard 
                            dummy text ever since the 1500s
                            </p>
                            <a href="https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol" target="_blank">Lees meer</a>
                        </div>
                    </div> 
                    <div class="resultCard">
                        <div id="cardBgsystem" class="cardBgPosition"></div>
                        <div class="cardContent">
                            <h3>Allround medewerker sytem and devices</h3>
                            <p>Je hebt .... punten behaald.</p>
                            <p class="toelichting">
                            Lorem Ipsum is simply dummy text of the 
                            printing and typesetting industry. Lorem 
                            Ipsum has been the industry's standard 
                            dummy text ever since the 1500s
                            </p>
                            <a href="https://www.kw1c.nl/opleiding/25605o10/allround-medewerker-it-systems-and-devices-bol" target="_blank">Lees meer</a>
                        </div>
                    </div> 
            </section>
        </main>
        <?php
            include "../includes/footer.php";
        ?>
    </body>
</html>

