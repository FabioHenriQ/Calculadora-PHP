<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora PHP</title>
    <meta name="description" content="Uma simples calculadora feita em PHP, um projeto para praticar">
</head>
<body>
    <section>
        <form method="post">
            <div class="am">
                <div class="nm">
                    <input type="number" name="num1">
                    <input type="number" name="num2">
                </div><!--nm-->
                <div class="rd">
                    <input type="radio" id="soma" name="op" value="+">
                    <label for="soma">Somar</label><br>

                    <input type="radio" id="subtrai" name="op" value="-">
                    <label for="subtrai">Subtrair</label><br>

                    <input type="radio" id="multuplicar" name="op" value="*">
                    <label for="multiplicar">Multiplicar</label>

                    <input type="radio" id="dividir" name="op" value="/">
                    <label for="dividir">Dividir</label>
                </div><!--rd-->
            </div><!--am-->
            <input type="submit" name="acao" value="Enviar">
        </form>        
    </section>
</body>
</html>

<?php

function Somar($num1,$num2){
    return ($num1 + $num2);
}
function Subtrair($num1,$num2){
    return ($num1 - $num2);
}
function Multiplicar($num1,$num2){
    return ($num1 * $num2);
}
function Dividir($num1,$num2){
    return ($num1 / $num2);
}

    if(isset($_POST['acao'])){
        $num1 = @$_POST['num1'];
        $num2 = @$_POST['num2'];
        $op = @$_POST['op'];
        if($op == "+"){
            echo "O resultado é ".Somar($num1,$num2);
        }else if($op == "-"){
            echo "O resultado é ".Subtrair($num1,$num2);
        }else if($op == "*"){
            echo "O resultado é ".Multiplicar($num1,$num2);
        }else if($op == "/"){
            echo "O resultado é ".Dividir($num1,$num2);
        }
    }
?>