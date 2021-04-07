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
                        <a href="mailto:info@kwc1.nl">info@kwc1.nl</a>
                    </div>
                </div>
            </section>
            <section id="studietest">
                <div id="formContainer">
                    <div id="fheader">
                        <h3 id="counter">Studiekeuze test</h3>
                        <img src="../images/logo.svg" alt="logo">
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
                                        <input type="radio" name="quest1" value="a1" id="a1" required>
                                        <label for="a1">A. Hardware</label><br>
                                        <input type="radio" name="quest1" value="b1" id="b1" required>
                                        <label for="b1">B. Software</label><br>
                                        <input type="radio" name="quest1" value="c1" id="c1" required>
                                        <label for="c1">C. Allebei</label><br>
                                        <input type="radio" name="quest1" value="d1" id="d1" required>
                                        <label for="d1">D. Geen van beide</label><br>
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
                                        <input type="radio" name="quest2" value="a2" id="a2" required>
                                        <label for="a2">A. Ja, en ik vind het leuk om te doen</label><br>
                                        <input type="radio" name="quest2" value="b2" id="b2" required>
                                        <label for="b2">B. Ja, maar ik vind het niet heel leuk</label><br>
                                        <input type="radio" name="quest2" value="c2" id="c2" required>
                                        <label for="c2">C. Nee, het lijkt me wel leuk</label><br>
                                        <input type="radio" name="quest2" value="d2" id="d2" required>
                                        <label for="d2">D. Nee, lijkt me ook niet leuk</label><br>
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
                                        <input type="radio" name="quest3" value="a3" id="a3" required>
                                        <label for="a3">A. Ja, en ik vind het leuk om te doen</label><br>
                                        <input type="radio" name="quest3" value="b3" id="b3" required>
                                        <label for="b3">B. Ja, maar ik vind het niet heel leuk</label><br>
                                        <input type="radio" name="quest3" value="c3" id="c3" required>
                                        <label for="c3">C. Nee, het lijkt me wel leuk</label><br>
                                        <input type="radio" name="quest3" value="d3" id="d3" required>
                                        <label for="d3">D. Nee, lijkt me ook niet leuk</label><br>
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
                                        <input type="radio" name="quest4" value="a4" id="a4" required>
                                        <label for="a4">A. Ja ik vind het allebei leuk</label><br>
                                        <input type="radio" name="quest4" value="b4" id="b4" required>
                                        <label for="b4">B. Ja ik vind één van de twee leuk </label><br>
                                        <input type="radio" name="quest4" value="c4" id="c4" required>
                                        <label for="c4">C. Nee ik vind beide niet leuk </label><br>
                                        <input type="radio" name="quest4" value="d4" id="d4" required>
                                        <label for="d4">D. Weet ik niet</label><br>
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
                                        <input type="radio" name="quest5" value="a5" id="a5" required>
                                        <label for="a5">A. Ja ik weet er veel over (en wil meer leren) </label><br>
                                        <input type="radio" name="quest5" value="b5" id="b5" required>
                                        <label for="b5">B. Ik weet nog niet veel, maar wilt dat wel leren</label><br>
                                        <input type="radio" name="quest5" value="c5" id="c5" required>
                                        <label for="c5">C. Ik weet er niet veel van en lijkt me niet zo leuk </label><br>
                                        <input type="radio" name="quest5" value="d5" id="d5" required>
                                        <label for="d5">D. Ik weet er niet veel van en lijkt me niet zo leuk in </label><br>
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
                                        <input type="radio" name="quest6" value="a6" id="a6" required>
                                        <label for="a6">A. Ja dat is precies wat ik zoek </label><br>
                                        <input type="radio" name="quest6" value="b6" id="b6" required>
                                        <label for="b6">B. Ja lijkt me wel leuk </label><br>
                                        <input type="radio" name="quest6" value="c6" id="c6" required>
                                        <label for="c6">C. Lijkt me niet zo leuk, maar wilt het wel eens proberen</label><br>
                                        <input type="radio" name="quest6" value="d6" id="d6" required>
                                        <label for="d6">D. Lijkt me niks aan </label><br>
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
                                        <input type="radio" name="quest7" value="a7" id="a7" required>
                                        <label for="a7">A. Ja beide </label><br>
                                        <input type="radio" name="quest7" value="b7" id="b7" required>
                                        <label for="b7">B. Ja één van de twee</label><br>
                                        <input type="radio" name="quest7" value="c7" id="c7" required>
                                        <label for="c7">C. Een klein beetje</label><br>
                                        <input type="radio" name="quest7" value="d7" id="d7" required>
                                        <label for="d7">D. Nee</label><br>
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
                                        <input type="radio" name="quest8" value="a8" id="a8" required>
                                        <label for="a8">A. Ja ik kan goed met iedereen communiceren</label><br>
                                        <input type="radio" name="quest8" value="b8" id="b8" required>
                                        <label for="b8">B. Ja, maar met onbekende vind ik spannend</label><br>
                                        <input type="radio" name="quest8" value="c8" id="c8" required>
                                        <label for="c8">C. Nee ik vind het spannend om te communiceren</label><br>
                                        <input type="radio" name="quest8" value="d8" id="d8" required>
                                        <label for="d8">D. Nee ik praat niet zo graag met (onbekende) mensen</label><br>
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
                                        <input type="radio" name="quest9" value="a9" id="a9" required>
                                        <label for="a9">A. Ja ik ben graag leider van een team en geef veel advies!</label><br>
                                        <input type="radio" name="quest9" value="b9" id="b9" required>
                                        <label for="b9">B. Ja ik kan het allebei wel redelijk</label><br>
                                        <input type="radio" name="quest9" value="c9" id="c9" required>
                                        <label for="c9">C. Nee maar daar wil ik aan werken</label><br>
                                        <input type="radio" name="quest9" value="d9" id="d9" required>
                                        <label for="d9">D. Nee maar dat vind ik ook niet leuk om te doen</label><br>
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
                                        <input type="radio" name="quest10" value="a10" id="a10" required>
                                        <label for="a10">A. Ja</label><br>
                                        <input type="radio" name="quest10" value="b10" id="b10" required>
                                        <label for="b10">B. Ja ik werk graag samen maar ben liever niet te leider</label><br>
                                        <input type="radio" name="quest10" value="c10" id="c10" required>
                                        <label for="c10">C. Nee ik ben niet goed in leiding geven, maar ik kan wel goed samenwerken</label><br>
                                        <input type="radio" name="quest10" value="d10" id="d10" required>
                                        <label for="d10">D. Nee ik werk liever alleen</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q11">
                                <h3>Vraag 11: Ben je goed in luisteren en informatie goed opnemen?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest11" value="a11" id="a11" required>
                                        <label for="a11">A. Ja</label><br>
                                        <input type="radio" name="quest11" value="b11" id="b11" required>
                                        <label for="b11">B. Ja maar onthouden is wat lastig voor mij</label><br>
                                        <input type="radio" name="quest11" value="c11" id="c11" required>
                                        <label for="c11">C. Nee onthouden ben ik erg slecht in</label><br>
                                        <input type="radio" name="quest11" value="d11" id="d11" required>
                                        <label for="d11">D. Nee ik kan niet goed luisteren (en ben snel afgeleid  een gesprek)</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q12">
                                <h3>Vraag 12: Kun je je goed focussen en geconcentreerd werken?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest12" value="a12" id="a12" required>
                                        <label for="a12">A. Ja</label><br>
                                        <input type="radio" name="quest12" value="b12" id="b12" required>
                                        <label for="b12">B. Een beetje</label><br>
                                        <input type="radio" name="quest12" value="c12" id="c12" required>
                                        <label for="c12">C. Ligt aan de omgeving</label><br>
                                        <input type="radio" name="quest12" value="d12" id="d12" required>
                                        <label for="d12">D. Nee ik ben snel afgeleid</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q13">
                                <h3>Vraag 13: Deel je graag je kennis met andere en wil je graag leren?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest13" value="a13" id="a13" required>
                                        <label for="a13">A. Ja beide</label><br>
                                        <input type="radio" name="quest13" value="b13" id="b13" required>
                                        <label for="b13">B. Ik leer graag maar kennis delen ben ik niet goed in</label><br>
                                        <input type="radio" name="quest13" value="c13" id="c13" required>
                                        <label for="c13">C. Alleen over dingen die ik interessant vind</label><br>
                                        <input type="radio" name="quest13" value="d13" id="d13" required>
                                        <label for="d13">D. Nee beide niet</label><br>
                                    </div>
                                    <div class="image noImage">
                                        <figure>
                                            <img src="" alt="" title="">
                                            <figcaption></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="question" id="q14">
                                <h3>Vraag 14: Vind je falen heel vervelend of leer je juist van falen?</h3>
                                <div>
                                    <div class="answers">
                                        <input type="radio" name="quest14" value="a14" id="a14" required>
                                        <label for="a14">A. Ik wil niet falen en geen fouten maken!</label><br>
                                        <input type="radio" name="quest14" value="b14" id="b14" required>
                                        <label for="b14">B. Ik vind het niet fijn maar fouten kunnen gebeuren</label><br>
                                        <input type="radio" name="quest14" value="c14" id="c14" required>
                                        <label for="c14">C. Iedereen maakt fouten, als ik er maar van leer!</label><br>
                                        <input type="radio" name="quest14" value="d14" id="d14" required>
                                        <label for="d14">D. Fouten maken is juist goed! Je kunt er van leren en jezelf verbeteren</label><br>
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

