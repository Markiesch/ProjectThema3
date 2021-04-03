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
                    <div id="formStartscreen">
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
                                if(isset($_COOKIE["username"]))
                                {
                                    $username = $_COOKIE["username"] . ",";
                                }
                                else
                                {
                                    $username = ",";
                                }

                                echo TimeGreeting() . " " . $username;

                            ?>
                        </h3>
                        <p>
                            Wil jij graag weten of een van de ict opleidingen bij jou past? Doe dan nu de studietest!<br>
                            Heb je nog geen idee of twijfel je nog welke MBO opleiding je wilt doen?
                            Dan is dit de perfecte test!<br>
                            Vul hem eerlijk in zodat je een correcte uitslag krijgt &#128540;<br>
                            Vul je naam in en start de test!
                        </p>
                        <?php
                            if(isset($_COOKIE["username"]) == false)
                            {
                                echo "<input type='text' name='username' id='usernameInput' placeholder='Vul hier je voor- en achternaam in'>
                                <button class='btn' onclick='startTestAddCookie()'>
                                    <span>Start de studiekeuze test</span>
                                </button>";
                            }
                            else
                            {
                                echo "<br><br><button class='btn' onclick='startStudieTest()'>
                                    <span>Start de studiekeuze test</span>
                                </button>";
                            }
                        ?>
                    </div>
                    <div id="fquestions">
                        <form action="resultaat.php" method="post" id="studietestForm">
                            <div class="question" id="q1">
                                <h3>Vraag 1: Ben je meer geïnteresseerd in Hardware of in Software?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest1" value="1a" id="1a">
                                        <label for="1a">A. Antwoord a staat hierzo mooi</label><br>
                                        <input type="radio" name="quest1" value="1b" id="1b">
                                        <label for="1b">B. Antwoord b staat dan hier onder top</label><br>
                                        <input type="radio" name="quest1" value="1c" id="1c">
                                        <label for="1c">C. Antwoord c tja deze staat er ook nog en dan</label><br>
                                        <input type="radio" name="quest1" value="1d" id="1d">
                                        <label for="1d">D. Antwoord d helemaal onderaan </label><br>
                                    </div>
                                    <div class="image">
                                        <figure>
                                            <img src="../images/background.jpg" alt="test" title="test">
                                            <figcaption>Voorbeeld afbeelding</figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q2">
                                <h3>Vraag 2: ...</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest2" value="2a" id="2a">
                                        <label for="2a">A. Antwoord a</label><br>
                                        <input type="radio" name="quest2" value="2b" id="2b">
                                        <label for="2b">B. Antwoord b</label><br>
                                        <input type="radio" name="quest2" value="2c" id="2c">
                                        <label for="2c">C. Antwoord c</label><br>
                                        <input type="radio" name="quest2" value="2d" id="2d">
                                        <label for="2d">D. Antwoord d</label><br>
                                    </div>
                                    <div class="image">
                                        <figure>
                                            <img src="../images/background.jpg" alt="test" title="test" height="auto" width="350px">
                                            <figcaption>Voorbeeld afbeelding</figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="fbuttons">
                        <button class="btn" id="prevBtn">
                            <img src="../images/left-arrow.svg" alt="prev">
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

