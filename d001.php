<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
</head>
<body>
    <div>
        <h1>Informe um número</h1>
        <?php 
        $num = $_POST["num"];
        $numA = $num - 1;
        $numS = $num + 1;
        echo "<p>O número escolhido foi <strong>$num</strong></p><br>";
        echo "<p>O seu antecessor é $numA</p><br>";
        echo "<p>O seu sucessor é $numS</p><br>";
        ?>
    </div>
</body>
</html>