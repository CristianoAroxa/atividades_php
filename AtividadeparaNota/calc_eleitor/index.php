<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>app eleitor</title>
</head>
<body>
    <h1>Aplicação eleitor</h1>
    <form name="formEleitor" method="POST">
        <label name="anoNasc">Ano de Nascimento</label>
    <br>
        <input type="text" name="anoNasc" placeholder="digite  o ano em que nasceu" required>
    <br>
        <label name="nome">Nome</label>
    <br>
        <input type="text" name="nome" placeholder="digite  o seu nome">
    <br>
    <br>
        <input type="submit" name="btn" value="Classificar">
        
    </form>

    <?php
        
        $nome = $_POST["nome"];
        $anoNasc = $_POST["anoNasc"];
        $anoAtual=date("Y");
        $idade = $anoAtual-$anoNasc;

        if($idade<16){
            echo"<b><h3>Olá, ".$nome. " você tem " .$idade." anos e você não possui idade para votar!</h3>";
        }
        elseif($idade>=16 && $idade<18){
            echo"<b><h3> Olá, ".$nome. " você tem " .$idade." anos e o seu voto é facultativo!</h3>";
        }
        elseif($idade>=18 && $idade<70){
            echo"<b><h3> Olá, ".$nome. " você tem " .$idade." anos e o seu voto é obrigatório!</h3>";
        }
        elseif($idade>70){
            echo"<b><h3> Olá, ".$nome. " você tem " .$idade." anos e o seu voto é facultativo!</h3>";
        }
        else {
            echo"inserir dados corretos";
        }
          
            
    ?>


    
</body>
</html>