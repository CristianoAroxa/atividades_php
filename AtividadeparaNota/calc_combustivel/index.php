<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Cálculo média combustível</h1>
    <form name="combustivel" method="GET">
        <select name="tipoComb">
            <option value="Gasolina">GASOLINA</option>
            <option value="Etanol">ETANOL</option>
            <option value="Diesel">DIESEL</option>
        </select>
        <br>
        <label name="valorPorLitro">Digite o valor por litro:</label>
        <br>
        <input type="text" name="valorPorLitro" method="GET" required>
        <br>
        <label name="kmInicial">Digite o Km inicial:</label>
        <br>        
        <input type="number" name="kmInicial" method="GET" required>
        <br>       
        <label name="kmFinal">Digite o Km final:</label>
        <br>
        <input type="number" name="kmFinal" method="GET" required>
        <br>
        <label name="abastecimento">Digite a quantidade de litros abastecidos:</label>
        <br>
        <input type="text" name="abastecimento" method="GET" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php 
    
    $tipoComb = $_GET['tipoComb'];
    $kmInicial = $_GET['kmInicial'];
    $kmFinal = $_GET['kmFinal'];
    $abastecimento =$_GET['abastecimento'];
    $consMedio =($kmFinal - $kmInicial)/ $abastecimento;
    $valorPorLitro = $_GET['valorPorLitro'];
    $valorPago = $abastecimento * $valorPorLitro;
  
    echo"<h3>O consumo médio do seu veículo utilizando ".$tipoComb.  " é de: ".$consMedio = number_format($consMedio, 2,',',''). " km/l e o valor a ser pago é: R$ ".$valorPago = number_format($valorPago,2,',','')."<h3>" ;
 
    
    ?>
</body>
</html>