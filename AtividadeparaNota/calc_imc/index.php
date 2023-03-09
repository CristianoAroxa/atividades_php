<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cálculo IMC</title>
</head>
<body>

<h1>Calcular IMC</h1>
<form name="formulario" method="GET">        
        <label>Digite seu Nome:</label>
        <br>
        <input type="text" name="nome" required>
        <br> 
        <label>Digite o ano do seu nascimento:</label>
        <br>
        <input type="text" name="anoNasc" required>
        <br> 
        <label>Digite seu peso:</label>
        <br>
        <input type="number" name="peso" required>
        <br> 
        <label>Digite a altura:</label>
        <br>
        <input type="text" name="altura" required>
        <br>
        <input type="submit" value="Calcular">
</form>

<?php

$nome = $_GET["nome"];
$anoNasc = $_GET['anoNasc'];
$peso = $_GET['peso'];
$altura = $_GET["altura"];
$imc = $peso /pow($altura,2);
$anoAtual=date("Y");
$idade = $anoAtual-$anoNasc;

echo "<h2>Olá, ".$nome." você tem ".$idade. " anos e seu IMC é: </h2>";

if($imc<18.5){
    echo"<input type='text' class='form-control col-6 mx-auto' value=".$imc=number_format($imc,2,",",".").">";
    echo"<h3 class='text-center'>Abaixo do peso</h3>";
}
elseif($imc>=18.5 and $imc<24.9){
    echo"<input type='text' class='form-control col-6 mx-auto' value=".$imc=number_format($imc,2,",",".").">";
    echo"<h3 class='text-center'>Peso ideal</h3>";
}
elseif($imc>=24.9 and $imc<29.9){
    echo"<input type='text' class='form-control col-6 mx-auto' value=".$imc=number_format($imc,2,",",".").">";
    echo"<h3 class='text-center'>Sobrepeso</h3>";
}
elseif($imc>=30 and $imc<34.9){
    echo"<input type='text' class='form-control col-6 mx-auto' value=".$imc=number_format($imc,2,",",".").">";
    echo"<h3 class='text-center'>Obesidade Grau I</h3>";
}
elseif($imc>=35 and $imc<39.9){
    echo"<input type='text' class='form-control col-6 mx-auto' value=".$imc=number_format($imc,2,",",".").">";
    echo"<h3 class='text-center'>Obesidade Grau II</h3>";
}
else{
    echo"<input type='text' class='form-control col-6 mx-auto' value=".$imc=number_format($imc,2,",",".").">";
    echo"<h3 class='text-center'>Obesidade extrema</h3>";
}

?>
    
</body>
</html>