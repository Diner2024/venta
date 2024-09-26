<?php
// Título y frases para la presentación
$titulo = "Para Mi Amor ❤️";
$frases = [
    "Eres la razón por la que sonrío cada día. 😊",
    "Tu amor es mi mayor tesoro. 💖",
    "Cada momento contigo es un regalo. 🎁",
    "Te amo hasta la luna y de regreso. 🌙",
    "Eres mi sueño hecho realidad. 🌟",
    "Contigo, el mundo es más bonito. 🌈",
];

// Comienza a generar el HTML
echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $titulo . '</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #ff69b4;
        }
        .corazon {
            font-size: 50px;
        }
        .frase {
            margin: 15px 0;
            font-size: 20px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>' . $titulo . '</h1>
    <div class="corazon">❤️❤️❤️</div>';

foreach ($frases as $frase) {
    echo '<div class="frase">' . $frase . '</div>';
}

echo '<div class="corazon">❤️❤️❤️</div>
</body>
</html>';
?>