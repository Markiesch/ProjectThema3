<!--
    Author: Pepijn Emmers
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
        <link rel="stylesheet" href="../styles/formulier.css">
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
        <script src="../scripts/script.js" defer></script>
        <title>ICT-Academie - Koning Willem I College</title>
    </head>
    <body>
        <?php
            include "../includes/header.php";
        ?>
        <main>
            <section class="intro banner">
                <div>
                    <h1>ICT-ACADEMIE</h1>
                    <h2>Welke opleiding past bij jou?</h2>
                </div>
            </section>
            <div class="streep"></div>
            <h2 class="pagetitle">STUDIEKEUZE TEST</h2>
            <!-- uitleg section -->
            <section id="explanation">
                <div id="uitleg">
                    <h3>Hoe werkt het?</h3>
                    <ol>
                        <li>
                            Vul je naam in en klik op "Start de enquête".
                        </li>
                        <li>
                            Lees de vraag en geef eerlijk antwoord. Je kan bij elke vraag maar 1 antwoord kiezen.
                        </li>
                        <li>
                            Klik op volgende en beantwoord zo alle vragen. Bij de laatste vraag druk je op "Versturen".
                        </li>
                        <li>
                            Bekijk je score en neem indien je wilt, contact op.
                            U kunt uw score ook downloaden in een pdf bestand.
                        </li>
                    </ol>
                </div>
                <div id="contact">
                    <h3>Contact</h3>
                    <div title="Bel het Studenten Succes Centrum">
                        <img src="../images/phone.png" alt="phone">
                        <a href="tel:073 624 9 600">073 624 9 600</a>
                    </div>
                    <div title="Stuur een e-mail naar het Studenten Succes Centrum">
                        <img src="../images/email.png" alt="mail">
                        <a href="mailto:info@kw1c.nl">info@kw1c.nl</a>
                    </div>
                </div>
            </section>
            <section id="form">
                <div id="formContainer">
                    <div id="formStartscreen">
                        <h3>
                            <?php
                                date_default_timezone_set("Europe/Amsterdam");
                                $time = date("G");
                                $msg = "";
                                if($time >= 6 && $time < 12)
                                {
                                    $msg = "Goedemorgen";
                                }
                                elseif($time >= 12 && $time < 18)
                                {
                                    $msg = "Goedemiddag";
                                }
                                elseif($time >= 18 && $time < 24)
                                {
                                    $msg = "Goedenavond";
                                }
                                elseif($time >= 00 && $time < 24)
                                {
                                    $msg = "Goedenacht";
                                }
                                else
                                {
                                    $msg = "Hallo";
                                }
                                echo $msg . ",";
                            ?>
                        </h3>
                        <p>
                            Wil jij graag weten of een van de ict opleidingen bij jou past? Doe dan nu de studietest!<br>
                            Door middel van deze test kun jij er achter komen welke opleiding het beste bij jou past.<br>
                            Heb je nog geen idee welke MBO opleiding je wilt doen? Of twijfel je misschien nog tussen een paar opleidingen?<br>
                            Dan is dit de perfecte test! Vul hem eerlijk in, het is voor jezelf en je wilt wel een passende uitslag natuurlijk ;)<br>
                            Lees hier boven hoe het werkt en start de test!
                        </p>
                        <form action="" method="post">
                            <label for="fullname">Voor- en Achternaam*</label>
                            <input type="text" name="fullname" id="fullname" autocomplete="off" required>
                            <input type="checkbox" name="acceptCookies" id="acceptCookies" required>
                            <label for="acceptCookies">*Ik ga akkoord met de algemene voorwaarde en accepteer cookies</label>
                        </form>
                        <p>
                            *verplicht in te vullen
                        </p>
                    </div>
                    <!--
                    <div id="header"></div>
                    <div id="questions"></div>
                    <div id="buttons"></div>
                    <div id="footer"></div>
                    -->
                </div>
            </section>
        </main>
        <?php
            include "../includes/footer.php";
        ?>
    </body>
</html>

