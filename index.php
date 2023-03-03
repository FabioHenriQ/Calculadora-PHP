
<?php
$result = "O resultado aparecerá aqui";
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
        if($_POST['num1'] != NULL && $_POST['num2'] != NULL){
            $op = @$_POST['op'];
            if($op == "+"){
                $result = "$num1 + $num2 = ".Somar($num1,$num2);
            }else if($op == "-"){
                $result = "$num1 - $num2 = ".Subtrair($num1,$num2);
            }else if($op == "*"){
                $result = "$num1 x $num2 = ".Multiplicar($num1,$num2);
            }else if($op == "/"){
                $result = "$num1 ÷ $num2 = ".Dividir($num1,$num2);
            }else{$result = "Você esqueceu de colocar a operação";}
        }else{$result = "Precisa colocar os 2 numeros";}
    }
?>

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
            <h1>Calculadora PHP</h1>
            <div class="am">
                <div class="resultado">
                    <span>Resultado:</span>
                    <div class="resultado_conta">
                        <p><?php echo $result; ?></p>
                    </div>
                </div>
                <div class="nm">
                    <input type="number" name="num1" placeholder="Coloque o 1° numero...">
                    <input type="number" name="num2" placeholder="Coloque o 2° numero...">
                </div><!--nm-->

                <div class="rd">
                    <span>  Escolha uma operação:</span>
                    <div class="inline">
                        <input type="radio" id="soma" name="op" value="+">
                        <label for="soma">Somar</label><br>
                    </div><!--inline-->

                    <div class="inline">
                        <input type="radio" id="subtrai" name="op" value="-">
                        <label for="subtrai">Subtrair</label><br>
                    </div><!--inline-->

                    <div class="inline">
                        <input type="radio" id="multuplicar" name="op" value="*">
                        <label for="multiplicar">Multiplicar</label>
                    </div><!--inline-->

                    <div class="inline">
                        <input type="radio" id="dividir" name="op" value="/">
                        <label for="dividir">Dividir</label>
                    </div><!--inline-->
                </div><!--rd-->
            </div><!--am-->
            <input type="submit" name="acao" value="Enviar">
        </form>        
    </section>
</body>
</html>