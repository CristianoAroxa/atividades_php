<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>

<h1>Conversor de Moedas<h1>

<form>
     <select name="opcao" method="GET">
        <option value="conv1">Real(BRL) para Dolar(USD)</option>
        <option value="conv2">Dólar(USD) para Real(BRL)</option>
    </select>
    <br>
        <label name="cot">Digite a cotação atual do dolar:</label>
    <br>
        <input type="text" name="cot" method="GET" required>
    <br>      
        <label name="valor">Digite o valor a ser convertido:</label>
    <br>
        <input type="text" name="valor" method="GET" required>
    <br>      
        <input type="submit" value="calcular" method="GET">
    
    
</form>
    <?php    
   
    $opcao = $_GET["opcao"];
    $valor = $_GET['valor'];
    $cot = $_GET["cot"];
     
  

    switch($opcao){
        case "conv1":
            $result = $valor / $cot;
            echo "<h3>O valor convertido em dolares é: US$ ".$result = number_format($result, 2, ",",".")."</h3>";
        break;
        case "conv2" :
            $result = $valor * $cot;
            echo "<h3>O valor convertido em reais é: R$ ".$result = number_format($result, 2, ",",".")."</h3>";
        break;       
    }

    ?>



    
</body>
</html>