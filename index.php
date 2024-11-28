<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <p> imię</p>
        <input type="text" name="1">
       <p>nazwisko</p>
        <input type="text" name="2">
       <p>ulica</p> 
        <input type="text" name="3">
       <p>dom</p> 
        <input type="number" name="4">
       <p>miezkanie</p> 
        <input type="number" name="5">
       <p>miasto</p> 
        <input type="text" name="6">
       <p>data urodzenia</p> 
        <input type="date" name="7">
       <p>telefon</p> 
        <input type="tel" value="+48" name="8">
        <p>email</p>
        <input type="email" name="9">
        <p>płec</p>
        <input type="text" placeholder="man/woman" name="10">
        <p>prawo jazdy</p>
        <input type="checkbox" name="11">
        <p>hasło</p>
        <input type="password" name="12">
        <p>uwagi</p>
        <input type="text" name="13">    
        <input type="submit" name="all" value="Submit All">
    </form>
    <?php
    if(isset($_POST["all"]))
    {
        $imie = $_POST["1"];
        echo($imie);
        $nazwisko = $_POST["2"];
        echo($nazwisko);
        $ulica = $_POST["3"];
        echo($ulica);
        $dom = $_POST["4"];
        echo($dom);
        $mieszkanie = $_POST["5"];
        echo($mieszkanie);
        $miasto = $_POST["6"];
        echo($miasto);
        $data = $_POST["7"];
        echo($data);
        $tel = $_POST["8"];
        echo($tel);
        $email = $_POST["9"];
        echo($email);
        $plec = $_POST["10"];
        echo($plec);
        $prawo = $_POST["11"];
        echo($prawo);
        $haslo = $_POST["12"];
        echo($haslo);
        $uwagi = $_POST["13"];
        echo($uwagi);

    } else {
        echo("ANONIM");
    }
    ?>
</body>
</html>