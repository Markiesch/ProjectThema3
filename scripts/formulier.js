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
    console.log(activeQuestion);////weghalen

    //vraag terug
    if(activeQuestion == 1) {
        prevBtn.style.cssText = "opacity: 0; pointer-events: none;";
    }
    if(activeQuestion == 2) {
        //
    }
}

//volgende vraag button
function nextQuestion()
{
    //active question verhogen
    activeQuestion += 1;
    console.log(activeQuestion);////webhalen

    //vraag verder
    if(activeQuestion == 2) {
        prevBtn.style.cssText = "opacity: 1; pointer-events: all;";
    } else if(activeQuestion == 3) {
        //
    }
}