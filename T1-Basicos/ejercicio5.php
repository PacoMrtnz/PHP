<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
    <?php
    
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);

        print "<p>Actualice la página para mostrar una nueva tirada</p>\n";
        print "<p> <img src=img/$dado1.svg  width=200px height=200px>";
        print "<img src=img/$dado2.svg  width=200px height=200px> </p>\n";
        print "<p>Total: <span style=\"border: black 2px solid; font-size: 50px\">"
            . ($dado1 + $dado2) . "</span></p>";

    ?>
</body>
</html>