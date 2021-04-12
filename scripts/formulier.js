/*
    Auteur: Pepijn Emmers
    Aanmaakdatum: 2-4-2021

    Javascript formulier page
*/

//form beginnen en cookie instellen
function startTestAddCookie() {
    if (document.getElementById("usernameInput").value) {
        var username = document.getElementById("usernameInput").value;
        document.cookie = "username=" + username + ";expires=Mon, 1 Jan 2024 12:00:00 UTC; path=/";
    }
    document.getElementById("formStartscreen").style.display = "none";
    document.getElementById("fbuttons").style.cssText = "opacity: 1; pointer-events: all;";
    document.getElementById("fquestions").style.display = "block";
}
function startStudieTest() {
    document.getElementById("formStartscreen").style.display = "none";
    document.getElementById("fbuttons").style.cssText = "opacity: 1; pointer-events: all;";
    document.getElementById("fquestions").style.display = "block";
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
function prevQuestion() {
    //active question verlagen
    activeQuestion -= 1;
    //vraag terug
    if (activeQuestion == 1) {
        prevBtn.style.cssText = "opacity: 0; pointer-events: none;";
    }
    changeQuestion(activeQuestion);
}

//volgende vraag button
function nextQuestion() {
    //active question verhogen
    activeQuestion += 1;
    if (activeQuestion == 2) {
        prevBtn.style.cssText = "opacity: 1; pointer-events: all;";
    }
    changeQuestion(activeQuestion);
}

//change question
function changeQuestion(activeQuestion) {
    questions.style.left = (activeQuestion - 1) * -100 + "%";
    if (activeQuestion == 14) nextBtn.style.display = "flex";
    if (activeQuestion == 15) nextBtn.style.display = "none";
}
