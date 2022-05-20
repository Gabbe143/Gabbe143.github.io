<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Prov.css">
    <title>Prov</title>
    <script>
        function getNewPicture() {
            var Color = document.getElementById("backgroundcolor").value;
            var writtenText = document.getElementById("inputText").value;
            var choice = document.getElementById("pictures");
            var choiceText = choice.options[choice.selectedIndex].text;
            var div = `<div id="rectangle" style="background-color: ${Color}""><h3>${writtenText}</h3> <img src="Bilder/${choiceText}.png"></img></div>`
            document.getElementById("showCard").innerHTML = div;
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="top">
            <h1>Kortfabriken</h1>
        </div>
        <div class="choose">
            <label for="backgroundcolor">Bakgrundsfärg</label>
            <br>
            <input type="color" name="backgroundcolor" id="backgroundcolor" value="#0f0fb1">
            <br>
            <label for="inputText">Text</label>
            <br>
            <textarea name="inputText" id="inputText" cols="25" rows="4">Grattis Kalle!</textarea>
            <br>
            <label for="pictures">Bild</label>
            <br>
            <select name="pictures" id="pictures">
                <option value="bebis">Bebis</option>
                <option value="gris">Gris</option>
                <option value="hjärta" selected>Hjärta</option>
                <option value="myra">Myra</option>
                <option value="paket">Paket</option>
                <option value="sol">Sol</option>
                <option value="träd">Träd</option>
                <option value="äpple">Äpple</option>
            </select>
            <br>
            <input type="submit" value="Generera kort" name="submit" id="submit" onclick="getNewPicture()">
        </div>
        <div id="showCard">
            <div id="rectangle">
                <h3>Grattis Kalle!</h3>
                <img src="Bilder/hjärta.png" alt="en bild på ett hjärta">
            </div>
        </div>
    </div>
</body>

</html>