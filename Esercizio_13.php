<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function generaUrlImmagine ($altezza, $larghezza) {
            return "https://picsum.photos/" . $altezza . "/" . $larghezza;
        }

        $altezza = 4096;
        $larghezza = 2160;
        echo "<img src=" . generaUrlImmagine($altezza, $larghezza) . ">"
    ?>
</body>
</html>