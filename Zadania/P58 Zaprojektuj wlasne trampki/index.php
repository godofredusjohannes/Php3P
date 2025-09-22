<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>P58</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie P58</h1>
    <h2>Twórca: Seweryn Poczynek 2P</h2>
    <br><br>
</header>

<h1>Formularz</h1>
<form id="myForm" method="post" action="">
    <fieldset>
        <legend>Podstawowe dane</legend>
    <label for="name">Imię i nazwisko</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="e-mail">E-mail:</label>
    <input type="email" id="e-mail" name="e-mail" required><br><br>


        <label for="telephone">Telephone: </label>
        <input type="number" id="telephone" name="telephone" required><br><br>

        <label for="opis">Moje buty są TAKIE stare....</label><br>
        <textarea name="opis" id="opis" cols="70" rows="3"></textarea>
    </fieldset>
    <h2>Zaprojektuj własne trampki:</h2>

    <fieldset>
        <legend>Własny projekt butów</legend>

        <fieldset>
            <legend>Kolor <em>(wybierz jeden)</em>:</legend>
            <ul>
                <li><label><input type="radio" name="color" value="Czerwony"> Czerwony</label></li>
                <li><label><input type="radio" name="color" value="Niebieski"> Niebieski</label></li>
                <li><label><input type="radio" name="color" value="Czarny"> Czarny</label></li>
                <li><label><input type="radio" name="color" value="Srebrny"> Szary</label></li>
            </ul>
        </fieldset>

        <fieldset>
            <legend>Opcje <em>(możesz wybrać kilka)</em></legend>
            <ul>
                <li><input type="checkbox" name="features[]" value="Bling bling sznurówki"> Błyszczące sznurówki</li>
                <li><input type="checkbox" name="features[]" value="Metalowe logo" checked> Metalowe logo</li>
                <li><input type="checkbox" name="features[]" value="Świecące podeszwy"> Świecące podeszwy</li>
                <li><input type="checkbox" name="features[]" value="MP3"> Odtwarzanie MP3</li>
            </ul>
        </fieldset>

        <fieldset>
            <legend>Rozmiar</legend>
            <p>Rozmiar zgodny ze standardowymi numerkami butów:
                <select name="size" size="1">
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                    <option>40</option>
                    <option>41</option>
                    <option>42</option>
                    <option>43</option>
                    <option>44</option>
                    <option>45</option>
                    <option>46</option>
                    <option>47</option>
                </select>
            </p>
        </fieldset>
    </fieldset>

    <input type="submit" value="Wyślij">
</form>

<div class="result" id="result" style="display: none;">
    <h3>Wynik:</h3>
    <p id="resultContent"></p>
</div>
<section id="wynik">
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['e-mail']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $opis = htmlspecialchars($_POST['opis']);
        $color = isset($_POST['color']) ? $_POST['color'] : "Nie wybrano koloru";
        $size = $_POST['size'];

        $features = isset($_POST['features']) ? $_POST['features'] : [];

        echo "<h3>Wynik:</h3>";
        echo "<p><strong>Imię i nazwisko:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Telefon:</strong> $telephone</p>";
        echo "<p><strong>Opis:</strong> $opis</p>";
        echo "<p><strong>Kolor:</strong> $color</p>";
        echo "<p><strong>Rozmiar:</strong> $size</p>";
        echo "<p><strong>Opcje:</strong> " . implode(", ", $features) . "</p>";
    }

    else{
        echo "Wystąpił błąd.";
    }


?>
</section>
</body>
</html>