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
        <script src="../scripts/formulier.js" defer></script>
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
                            Vul je naam in en klik op "Start de studiekeuze test".
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
            <section id="studietest">
                <div id="formContainer">
                    <div id="fheader">
                        <h3 id="counter">Studiekeuze test</h3>
                        <img src="../images/kw1c-logo.svg" alt="logo">
                    </div>
                   <!-- <div id="formStartscreen">
                        <h3>
                            <?php
                                function TimeGreeting()
                                {
                                    date_default_timezone_set("Europe/Amsterdam");
                                    $time = date("G");
                                    $msg = "";
                                    if ($time >= 6 && $time < 12) {
                                        $msg = "Goedemorgen";
                                    } elseif ($time >= 12 && $time < 18) {
                                        $msg = "Goedemiddag";
                                    } elseif ($time >= 18 && $time < 24) {
                                        $msg = "Goedenavond";
                                    } elseif ($time >= 00 && $time < 24) {
                                        $msg = "Goedenacht";
                                    } else {
                                        $msg = "Hallo";
                                    }
                                    return $msg;
                                }
                                echo TimeGreeting();
                            ?>
                        </h3>
                        <p>
                            Wil jij graag weten of een van de ict opleidingen bij jou past? Doe dan nu de studietest!<br>
                            Door middel van deze test kun jij er achter komen welke opleiding het beste bij jou past.<br>
                            Heb je nog geen idee welke MBO opleiding je wilt doen? Of twijfel je misschien nog tussen een paar opleidingen?<br>
                            Dan is dit de perfecte test! Vul hem eerlijk in, het is voor jezelf en je wilt wel een passende uitslag natuurlijk ;)<br>
                            Lees hier boven hoe het werkt en start de test!
                        </p>
                    </div>-->
                    <div id="fquestions">
                        <form action="resultaat.php" method="post">
                            <div class="quistion" id="q1">
                                <h3>Vraag 1: Ben je meer geïnteresseerd in Hardware of in Software?</h3>
                                <div class="answers">
                                    <input type="radio" name="quist1" value="1a" id="1a">
                                    <label for="1a">A. Antwoord a</label><br>
                                    <input type="radio" name="quist1" value="1b" id="1b">
                                    <label for="1b">B. Antwoord b</label><br>
                                    <input type="radio" name="quist1" value="1c" id="1c">
                                    <label for="1c">C. Antwoord c</label><br>
                                    <input type="radio" name="quist1" value="1d" id="1d">
                                    <label for="1d">D. Antwoord d</label><br>
                                </div>
                                <div class="image">
                                    <!--<img src="" alt="" title="">-->
                                </div>
                            </div>
                            <div class="quistion" id="q2">
                                <h3>Vraag 2: ...</h3>
                                <div class="answers">
                                    <input type="radio" name="quist2" value="2a" id="2a">
                                    <label for="2a">A. Antwoord a</label><br>
                                    <input type="radio" name="quist2" value="2b" id="2b">
                                    <label for="2b">B. Antwoord b</label><br>
                                    <input type="radio" name="quist2" value="2c" id="2c">
                                    <label for="2c">C. Antwoord c</label><br>
                                    <input type="radio" name="quist2" value="2d" id="2d">
                                    <label for="2d">D. Antwoord d</label><br>
                                </div>
                                <div class="image">
                                    <!--<img src="" alt="" title="">-->
                                </div>
                            </div>
                            <div class="quistion" id="q3">
                                <h3>Vraag 3: ...</h3>
                                <div class="answers">
                                    <input type="radio" name="quist3" value="3a" id="3a">
                                    <label for="3a">A. Antwoord a</label><br>
                                    <input type="radio" name="quist3" value="3b" id="3b">
                                    <label for="3b">B. Antwoord b</label><br>
                                    <input type="radio" name="quist3" value="3c" id="3c">
                                    <label for="3c">C. Antwoord c</label><br>
                                    <input type="radio" name="quist3" value="3d" id="3d">
                                    <label for="3d">D. Antwoord d</label><br>
                                </div>
                                <div class="image">
                                    <!--<img src="" alt="" title="">-->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="fbuttons">
                        <button class="btn" id="prevBtn">
                            <img src="../images/left-arrow.svg" alt="<--">
                        </button>
                        <button class="btn" id="nextBtn">
                            <span>Volgende</span>
                            <img src="../images/right-arrow.svg" alt="">
                        </button>
                    </div>
                    <div id="ffooter">
                        <a href="/privacyverklaring" target="_blank">Privacy en gegevensbeheer</a>
                        <a href="/feedback" target="_blank">Feedback</a>
                    </div>
                </div>
            </section>
        </main>
        <?php
            include "../includes/footer.php";
        ?>
    </body>
</html>

