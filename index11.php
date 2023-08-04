<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <h1 align="center">Atividade triangulo</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <label for="ladoA"> Lado a: </label>
    <input type="number" name="ladoA">

    <label for="ladoB"> Lado b: </label>
    <input type="number" name="ladoB">

    <label for="ladoC"> Lado c: </label>
    <input type="number" name="ladoC">
    <br><br>
    <input type="submit">
    <input type="reset">

    <?php
    if(isset($_POST["ladoA"]) && isset($_POST["ladoB"]) && isset($_POST["ladoC"])) {
        
        $a = $_POST["ladoA"];
        $b = $_POST["ladoB"];
        $c = $_POST["ladoC"];

        if (($a < ($b + $c)) && ($b < ($a + $c)) && ($c < ($a + $b))) {
            echo "<br><br>Isso é um triangulo";
        } else {
            echo "<br><br>Isso nao é um triangulo";
        }
    }
    ?>
    </form>
</body>
</html>
