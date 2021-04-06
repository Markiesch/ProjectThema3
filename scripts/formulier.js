/*
    Auteur: Pepijn Emmers
    Aanmaakdatum: 2-4-2021

    Javascript formulier page
 */

//functie om cookie toe te voegen met username
function startTestAddCookie()
{
    var username = document.getElementById("usernameInput").value;
    document.cookie = "username=" + username + ";expires=Mon, 1 Jan 2024 12:00:00 UTC; path=/";
    document.getElementById("formStartscreen").style.display = "none";
}
function startStudieTest()
{
    document.getElementById("formStartscreen").style.display = "none";
}



function prevQuestion()
{
    console.log("prev");
}
function nextQuestion()
{
    console.log("next");
}