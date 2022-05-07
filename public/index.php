<?php require_once "./../php/Sorteio.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="shortcut icon" href="assets/images/account-history-line-art-vector-260nw-273860531.webp" type="image/x-icon">
    <title>Sorteio</title>
</head>
<body>
    <div class="space-w-h">
        <div class="container color p-5 text-light">
            <header class="d-flex justify-content-center align-items-center flex-column" >
                <h3 class="mb-3">App "SORTEIO"</h3>
                <p>Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual ou quais número(s) não se repetiram.</p>
                
            </header>
            <form method="get">
                
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <label for="result">Resultado:</label>
                        <p>
                            Total sorteio: <?=$resul_arr?>
                        </p>
                        <p>
                            Numeros repetidos: <?=$resul_rep?>
                        </p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sortear</button>
            </form>
        </div>
    </div>
</body>
</html>