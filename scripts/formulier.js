/*
    Auteur: Pepijn Emmers
    Aanmaakdatum: 2-4-2021

    Javascript formulier page
 */

//form beginnen en cookie instellen
function startTestAddCookie()
{
    if(document.getElementById("usernameInput").value != "")
    {
        var username = document.getElementById("usernameInput").value;
        document.cookie = "username=" + username + ";expires=Mon, 1 Jan 2024 12:00:00 UTC; path=/";
    }
    document.getElementById("formStartscreen").style.display = "none";
    document.getElementById("fbuttons").style.cssText = "opacity: 1; pointer-events: all;";
}
function startStudieTest()
{
    document.getElementById("formStartscreen").style.display = "none";
    document.getElementById("fbuttons").style.cssText = "opacity: 1; pointer-events: all;";
}

//variable aanmaken
var activeQuestion = 1;
var prevBtn = document.getElementById("prevBtn");
var nextBtn = document.getElementById("nextBtn");
var questions = document.getElementById("studietestForm");

//prevBtn tonen of verbergen
if (activeQuestion == 1) {
    prevBtn.style.cssText = "opacity: 0; pointer-events: none;";
} else {
    prevBtn.style.cssText = "opacity: 1; pointer-events: all;";
}

//vorige vraag button
function prevQuestion()
{
    //active question verlagen
    activeQuestion -= 1;
    //vraag terug
    if(activeQuestion == 1) {
        prevBtn.style.cssText = "opacity: 0; pointer-events: none;";
    }
    changeQuestion(activeQuestion);
}

//volgende vraag button
function nextQuestion()
{
    //active question verhogen
    activeQuestion += 1;
    if(activeQuestion == 2) {
        prevBtn.style.cssText = "opacity: 1; pointer-events: all;";
    }

    if (activeQuestion <= 15) {
        changeQuestion(activeQuestion);
    }
}

//change question
function changeQuestion(activeQuestion)
{
    if (activeQuestion == 1) {
        questions.style.left = "0%";
    } else if (activeQuestion == 2) {
        questions.style.left = "-100%";
    } else if (activeQuestion == 3) {
        questions.style.left = "-200%";
    } else if (activeQuestion == 4) {
        questions.style.left = "-300%";
    } else if (activeQuestion == 5) {
        questions.style.left = "-400%";
    } else if (activeQuestion == 6) {
        questions.style.left = "-500%";
    } else if (activeQuestion == 7) {
        questions.style.left = "-600%";
    } else if (activeQuestion == 8) {
        questions.style.left = "-700%";
    } else if (activeQuestion == 9) {
        questions.style.left = "-800%";
    } else if (activeQuestion == 10) {
        questions.style.left = "-900%";
    } else if (activeQuestion == 11) {
        questions.style.left = "-1000%";
    } else if (activeQuestion == 12) {
        questions.style.left = "-1100%";
    } else if (activeQuestion == 13) {
        questions.style.left = "-1200%";
    } else if (activeQuestion == 14) {
        questions.style.left = "-1300%";
    } else if (activeQuestion == 15) {
        questions.style.left = "-1400%";
    }
}