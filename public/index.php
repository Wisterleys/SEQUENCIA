<?php require_once "./../php/Primos.php"; ?>
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
    <title>PRIMOS</title>
</head>
<body>
    <div class="space-w-h">
        <div class="container color p-5 text-light">
            <header class="d-flex justify-content-center align-items-center flex-column" >
                <h3 class="mb-3">App "PRIMOS"</h3>
                <p>Informe um número inteiro inicial e final e saberá os números primos que estão compreendidos entre o valor inicial e o final </p>
                <p>Regra: Será desprezado o número inicial e final recebidos como parâmetro</p>
            </header>
            <form method="get">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">De:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="start" >
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Até:</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="end" >
                    </div>
                </div>
                
                
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <label for="result">Resultado:</label>
                        <div class="form-check" id="result" class="row" style="height: 200px;overflow-y:scroll;">
                           <?php for ($i=0; $i < count($result_array); $i++) { ?>
                               <span><?=$result_array[$i]?></span>
                           <?php }?> 
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Verificar</button>
            </form>
        </div>
    </div>
</body>
</html>