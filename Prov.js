function getNewPicture() {
    var Color = document.getElementById("backgroundcolor").value;
    var writtenText = document.getElementById("inputText").value;
    var choice = document.getElementById("pictures");
    var choiceText = choice.options[choice.selectedIndex].text;
    var div = `<div id="rectangle" style="background-color: ${Color}""><h3>${writtenText}</h3> <img src="Bilder/${choiceText}.png"></img></div>`
    document.getElementById("showCard").innerHTML = div;
}