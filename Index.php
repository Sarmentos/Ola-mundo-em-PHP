<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da maldição</title>
    <style>
        body {
            margin: 0;
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #f0f0f0; 
        }
        .hello-world {
            font-size: 2em;
            font-family: Arial, sans-serif;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            position: relative;
            display: inline-block;
            overflow: hidden;
            animation: colorChange 3s infinite alternate; 
        }
        .hello-world:before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #ff8c00, #ff0080, #00bfff, #8a2be2);
            filter: blur(10px);
            z-index: -1;
            animation: backgroundMove 6s linear infinite;
        }
        @keyframes colorChange {
            0% {
                color: #ff8c00;
            }
            50% {
                color: #ff0080;
            }
            100% {
                color: #00bfff;
            }
        }
        @keyframes backgroundMove {
            0% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(50%);
            }
        }
        p {
            font-size: 1.2em;
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h1 class="hello-world">
            <?php 
                print "Olá, mundo! \u{1F30E}";
            ?>
        </h1>
        <p>Vamos tentar nos livrar da maldição</p>
    </div>
</body>
</html>
