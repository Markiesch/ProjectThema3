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
            <?php
                //array maken met waardes van input
                $values = [];

                for ($x = 1; $x < 15; $x++) {
                    $value = "0,0,0";
                    if (isset($_POST["quest$x"])) {
                        $value = $_POST["quest$x"];
                    }
                    //explode maakt van strings een array
                    array_push($values, explode(",", $value));
                }

                $softDev = 0;
                $ictBeh = 0;
                $allround = 0;

                //value toevoegen aan variables
                for ($i = 0; $i < count($values); $i++) {
                    $softDev += $values[$i][0];
                    $ictBeh += $values[$i][1];
                    $allround += $values[$i][2];
                }
            ?>

            <section class="information--section">
                <div>
                    <div>
                        <?php
                            if ($softDev <= 10 && $ictBeh <= 10 && $allround <= 10) {
                                echo "<div id='redLine'></div>";
                            } else {
                                echo "<div id='greenLine'></div>";
                            }
                        ?>
                        <h3>Resultaat</h3>
                        <span class="time">Ingevuld op <?php echo date("m-d-Y G:i"); ?></span>
                        <br><br>
                        <p>
                        <?php
                            if (isset($_COOKIE['username'])) {
                                $username = $_COOKIE["username"];
                            } else {
                                $username = "gebruiker";
                            }
                            //if else voor score onder de 10
                            if ($softDev <= 10 && $ictBeh <= 10 && $allround <= 10) {
                                echo "Geen van de opleidingen past bij jou " . $username .
                                ". Zoek verder naar een andere opleiding!<br><br>
                                <a href='https://www.kw1c.nl/opleidingen' target='_blank' style='text-decoration: underline; font-style: italic;'>Zoek een andere opleiding</a>";
                            } else {
                                //aan de hand van hoogste score, tekst tonen
                                if ($softDev > $ictBeh && $softDev > $allround) {
                                    echo "Bij jou past de opleiding <strong>Software Developer</strong> het beste ". $username . "! Je hebt hier " . $softDev . " punten behaald. Jij hebt de juiste eigenschappen voor deze opleiding. Wil je alles leren over het programmeren van software? Lijkt het je leuk om problemen op een creatieve manier oplossen? Dan is dit een mooie opleiding voor jou!<br><br><a href='https://www.kw1c.nl/opleiding/25604o10/software-developer-bol' target='_blank' style='text-decoration: underline; font-style: italic;'>Lees meer</a>";
                                } elseif ($ictBeh > $softDev && $ictBeh > $allround) {
                                    echo "Bij jou past de opleiding <strong>ICT-beheer</strong> het beste ". $username . "! Je hebt hier " . $ictBeh . " punten behaald. Jij hebt de juiste eigenschappen voor deze opleiding. Wil jij later verantwoordelijk zijn voor de informatiesystemen waar de moderne maatschappij op draait? Lees dan meer over onze opleiding Expert IT systems and devices.<br><br><a href='https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol' target='_blank' style='text-decoration: underline; font-style: italic;'>Lees meer</a>";
                                } elseif ($allround > $softDev && $allround > $ictBeh) {
                                    echo "Bij jou past de opleiding <strong>Allround medewerker sytem and devices</strong> het beste ". $username . "! Je hebt hier " . $allround . " punten behaald. Jij hebt de juiste eigenschappen voor deze opleiding. Heb jij echt verstand van computers en netwerken? Vind je het ook leuk om dienstverlenend te zijn? Dan is de opleiding Allround medewerker IT systems and devices misschien iets voor jou. <br><br><a href='https://www.kw1c.nl/opleiding/25605o10/allround-medewerker-it-systems-and-devices-bol' target='_blank' style='text-decoration: underline; font-style: italic;'>Lees meer</a>";
                                }
                            }
                        ?>
                        </p>
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
                            <p>Je hebt 
                                <?php echo $softDev; ?>    
                            punten behaald.</p>
                            <p class="toelichting">
                            Wil je alles leren over het programmeren van software? Lijkt het je leuk om problemen op een creatieve manier oplossen? Dan is dit een mooie opleiding voor jou!
                            </p>
                            <a href="https://www.kw1c.nl/opleiding/25604o10/software-developer-bol" target="_blank">Lees meer</a>
                        </div>
                    </div> 
                    <div class="resultCard">
                        <div id="cardBgict" class="cardBgPosition"></div>
                        <div class="cardContent">
                            <h3>ICT Beheer</h3>
                            <p>Je hebt 
                                <?php echo $ictBeh; ?>    
                            punten behaald.</p>
                            <p class="toelichting">
                            Wil jij later verantwoordelijk zijn voor de informatiesystemen waar de moderne maatschappij op draait? Lees dan meer over onze opleiding Expert IT systems and devices.
                            </p>
                            <a href="https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol" target="_blank">Lees meer</a>
                        </div>
                    </div> 
                    <div class="resultCard">
                        <div id="cardBgsystem" class="cardBgPosition"></div>
                        <div class="cardContent">
                            <h3>Allround medewerker sytem and devices</h3>
                            <p>Je hebt 
                                <?php echo $allround; ?>    
                            punten behaald.</p>
                            <p class="toelichting">
                            Heb jij echt verstand van computers en netwerken? Vind je het ook leuk om dienstverlenend te zijn? Dan is de opleiding Allround medewerker IT systems and devices misschien iets voor jou. 
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

