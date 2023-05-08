<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <h1>
        Forum Registratie
    </h1>
    <form method="post">
        <input type="text" name="name" placeholder="Naam" style="padding: 1em;"><br><br>
        <input type="text" name="surname" placeholder="Achternaam" style="padding: 1em;"><br><br>
        <input type="number" name="leeftijd" placeholder="Leeftijd" style="padding: 1em;"><br><br>
        <input type="text" name="email" placeholder="E-mail" style="padding: 1em;"><br><br>
        <input type="text" name="adres" placeholder="Adres" style="padding: 1em;"><br><br>
        <input type="submit" name="submit" value="Verzenden" style="padding: 1em;"><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $leeftijd = $_POST['leeftijd'];
        $email = $_POST['email'];
        $adres = $_POST['adres'];

        echo "<p>Jouw naam is: $name $surname</p>";
        echo "<p>Je leeftijd is: $leeftijd</p>";
        echo "<p>Je e-mailadres is: $email</p>";
        echo "<p>Je adres is: $adres</p>";
    }
    ?>
</body>
</html>
