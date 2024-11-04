<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function calcularPrecoComImposto($preco, $quantidade, $imposto = 0.1){
    $total = $preco*$quantidade;
    $totalComImposto = $total + ($total * $imposto);
    return $totalComImposto;

}

$preco_unitario= 30;
$quantidade = 2;

echo "Total com imposto: R$ ". calcularPrecoComImposto($preco_unitario, $quantidade);


    ?>
</body>
</html>