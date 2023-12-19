<?php
session_start();
$adresar = "TestLearn/";
$soubor = "uzivatele.csv";
$cesta = $adresar . $soubor;

if(!file_exists($soubor)){
    $new_file = fopen($cesta, "w");
    fclose($new_file);
    echo("soubor vytvořen nebo načten úspěšně");
}else{
    echo("něco je špatně");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form action="test.php" method="post" id="formular">
        <label for="username"> Jméno
            <input type="text" id="username">
        </label>
        <label for="given"> Přijmení
            <input type="text" id="given">
        </label>
        <button type="submit">Odeslat</button>
    </form>
<script>
    const odeslat = document.getElementById("formular")
    odeslat.addEventListener("submit", function(e){
        e.preventDefault();
        if (document.getElementById("username").value || document.getElementById("given").value === ""){
            alert("Vyplňte všechna pole");
        }
    })

</script>
</body>

</html>