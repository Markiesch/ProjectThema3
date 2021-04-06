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
                            Vul hem eerlijk in zodat je een correcte uitslag krijgt.<br>
                            Vul je naam in en start de test!
                        </p>
                        <?php
                            if(!isset($_COOKIE["username"]))
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
                    <!-- vragen -->
                    <div id="fquestions">
                        <form action="resultaat.php" method="post" id="studietestForm">
                            <div class="question" id="q1">
                                <h3>Vraag 1: Ben je meer geïnteresseerd in Hardware of in Software?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest1" value="1a" id="1a" required>
                                        <label for="1a">A. Hardware</label><br>
                                        <input type="radio" name="quest1" value="1b" id="1b" required>
                                        <label for="1b">B. Software</label><br>
                                        <input type="radio" name="quest1" value="1c" id="1c" required>
                                        <label for="1c">C. Allebei</label><br>
                                        <input type="radio" name="quest1" value="1d" id="1d" required>
                                        <label for="1d">D. Geen van beide</label><br>
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
                                <h3>Vraag 2: Heb je ervaring met programmeren?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest2" value="2a" id="2a" required>
                                        <label for="2a">A. Ja, en ik vind het leuk om te doen</label><br>
                                        <input type="radio" name="quest2" value="2b" id="2b" required>
                                        <label for="2b">B. Ja, maar ik vind het niet heel leuk</label><br>
                                        <input type="radio" name="quest2" value="2c" id="2c" required>
                                        <label for="2c">C. Nee, het lijkt me wel leuk</label><br>
                                        <input type="radio" name="quest2" value="2d" id="2d" required>
                                        <label for="2d">D. Nee, lijkt me ook niet leuk</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q3">
                                <h3>Vraag 3: Heb je ervaring met servers maken en onderhouden?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest3" value="3a" id="3a" required>
                                        <label for="3a">A. Ja, en ik vind het leuk om te doen</label><br>
                                        <input type="radio" name="quest3" value="3b" id="3b" required>
                                        <label for="3b">B. Ja, maar ik vind het niet heel leuk</label><br>
                                        <input type="radio" name="quest3" value="3c" id="3c" required>
                                        <label for="3c">C. Nee, het lijkt me wel leuk</label><br>
                                        <input type="radio" name="quest3" value="3d" id="3d" required>
                                        <label for="3d">D. Nee, lijkt me ook niet leuk</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q4">
                                <h3>Vraag 4: Vind je het leuk om dingen uit te zoeken en om te puzzelen (bijv. software)?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest4" value="4a" id="4a" required>
                                        <label for="4a">A. Ja ik vind het allebei leuk</label><br>
                                        <input type="radio" name="quest4" value="4b" id="4b" required>
                                        <label for="4b">B. Ja ik vind één van de twee leuk </label><br>
                                        <input type="radio" name="quest4" value="4c" id="4c" required>
                                        <label for="4c">C. Nee ik vind beide niet leuk </label><br>
                                        <input type="radio" name="quest4" value="4d" id="4d" required>
                                        <label for="4d">D. Weet ik niet</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q5">
                                <h3>Vraag 5: Weet je veel van computers, computernetwerken, printers en telefoons of wil je daar graag meer over leren?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest5" value="5a" id="5a" required>
                                        <label for="5a">A. Ja ik weet er veel over (en wil meer leren) </label><br>
                                        <input type="radio" name="quest5" value="5b" id="5b" required>
                                        <label for="5b">B. Ik weet nog niet veel, maar wilt dat wel leren</label><br>
                                        <input type="radio" name="quest5" value="5c" id="5c" required>
                                        <label for="5c">C. Ik weet er niet veel van en lijkt me niet zo leuk </label><br>
                                        <input type="radio" name="quest5" value="5d" id="5d" required>
                                        <label for="5d">D. Ik weet er niet veel van en lijkt me niet zo leuk in </label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q6">
                                <h3>Vraag 6: Lijkt het je leuk om te zorgen dat alles werkt, om kabels en netwerken aan te leggen en computers en andere apparatuur te installeren?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest6" value="6a" id="6a" required>
                                        <label for="6a">A. Ja dat is precies wat ik zoek </label><br>
                                        <input type="radio" name="quest6" value="6b" id="6b" required>
                                        <label for="6b">B. Ja lijkt me wel leuk </label><br>
                                        <input type="radio" name="quest6" value="6c" id="6c" required>
                                        <label for="6c">C. Lijkt me niet zo leuk, maar wilt het wel eens proberen</label><br>
                                        <input type="radio" name="quest6" value="6d" id="6d" required>
                                        <label for="6d">D. Lijkt me niks aan </label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q7">
                                <h3>Vraag 7: Heb je een proactieve en oplossingsgerichte instelling?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest7" value="7a" id="7a" required>
                                        <label for="7a">A. Ja beide </label><br>
                                        <input type="radio" name="quest7" value="7b" id="7b" required>
                                        <label for="7b">B. Ja één van de twee</label><br>
                                        <input type="radio" name="quest7" value="7c" id="7c" required>
                                        <label for="7c">C. Een klein beetje</label><br>
                                        <input type="radio" name="quest7" value="7d" id="7d" required>
                                        <label for="7d">D. Nee</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q8">
                                <h3>Vraag 8: Ben je goed in communiceren (met iemand die weinig van ICT weet)?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest8" value="8a" id="8a" required>
                                        <label for="8a">A. Ja ik kan goed met iedereen communiceren</label><br>
                                        <input type="radio" name="quest8" value="8b" id="8b" required>
                                        <label for="8b">B. Ja, maar met onbekende vind ik spannend</label><br>
                                        <input type="radio" name="quest8" value="8c" id="8c" required>
                                        <label for="8c">C. Nee ik vind het spannend om te communiceren</label><br>
                                        <input type="radio" name="quest8" value="8d" id="8d" required>
                                        <label for="8d">D. Nee ik praat niet zo graag met (onbekende) mensen</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q9">
                                <h3>Vraag 9: Ben je goed in leidinggeven en/of advies geven?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest9" value="9a" id="9a" required>
                                        <label for="9a">A. Ja ik ben graag leider van een team en geef veel advies!</label><br>
                                        <input type="radio" name="quest9" value="9b" id="9b" required>
                                        <label for="9b">B. Ja ik kan het allebei wel redelijk</label><br>
                                        <input type="radio" name="quest9" value="9c" id="9c" required>
                                        <label for="9c">C. Nee maar daar wil ik aan werken</label><br>
                                        <input type="radio" name="quest9" value="9d" id="9d" required>
                                        <label for="9d">D. Nee maar dat vind ik ook niet leuk om te doen</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q10">
                                <h3>Vraag 10: Werk je graag samen met teamleden die je indien nodig ook kan aansturen?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest10" value="10a" id="10a" required>
                                        <label for="10a">A. Ja</label><br>
                                        <input type="radio" name="quest10" value="10b" id="10b" required>
                                        <label for="10b">B. Ja ik werk graag samen maar ben liever niet te leider</label><br>
                                        <input type="radio" name="quest10" value="10c" id="10c" required>
                                        <label for="10c">C. Nee ik ben niet goed in leiding geven, maar ik kan wel goed samenwerken</label><br>
                                        <input type="radio" name="quest10" value="10d" id="10d" required>
                                        <label for="10d">D. Nee ik werk liever alleen</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="fbuttons">
                    <button class="btn" id="prevBtn" onclick="prevQuestion()">
                            <img src="../images/left-arrow.svg" alt="prev">
                        </button>
                        <button class="btn" id="nextBtn" onclick="nextQuestion()">
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

