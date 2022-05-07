<?php require_once "./../php/Sequencia.php"; ?>
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
    <title>Sequencia</title>
</head>
<body>
    <div class="space-w-h">
        <div class="container color p-5 text-light">
            <header class="d-flex justify-content-center align-items-center flex-column" >
                <h3 class="mb-3">App "Sequência"</h3>
                <p>Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.</p>
                
            </header>
            <form method="get">
            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Informe numeros entre virgula que montarei um array </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="array" >
                    </div>
</div>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <label for="result">Resultado:</label>
                        <?=$result?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sortear</button>
            </form>
        </div>
    </div>
</body>
</html>