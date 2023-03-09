<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cálculo fatorial</title>
</head>
<body>
    <h1>Cálculo fatorial de um número</h1>
    <div class="conversor-container">
        <form name="fact" method="GET">
            <label name="fatorial">Digite um número:</label>
            <br>
            <input type="number" name="num" method="GET" required>
            <br>
            <input type="submit" nome="btn" value="calcular">

        </form>
    </div>
    <?php
    
    $num = $_GET['num'];
    $n2 = $num;
    $tot = 0;

    while($num >= 1){
        $n2 = $n2 - 1;
        $tot = $n2 * $n2;
        $num--;
        echo "$tot<br>";
    }
  
    ?>
</body>
</html>