<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           $num = $_POST['idNumber'];
           $npos = $num +1;
           $nant = $num -1;

           echo "O número escolhido foi: $num.";
           echo "<br>O número posterior é: $npos.";
           echo "<br>O número anterior é: $nant."; 
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    
    </main>
        