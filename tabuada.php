<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula2 - Formulário</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
    <header><h1>Aula 2 - Formulários</h1></header>
    <nav></nav>
    <main>
        <form action="aula2.php" method="POST">
            <table>
                <tr><td>Tabuada com while:</td><td><input type="text" name="w"></td></tr>
                <tr><td>Tabuada com for:</td><td><input type="number" name="f"></td></tr>
                
                
                
                <tr><td><input type="reset" value="Apagar"></td><td><input type="submit" value="Enviar"></td></tr>
            </table></form>
            <?php

                if(isset($_POST["w"])){
                    $w = $_POST["w"];
                }
                else{
                    $w = null;
                }
                if(isset($_POST["f"])){
                    $f = $_POST["f"];
                }
                else{
                    $f = null;
                }

                if($w != null){
                    $res = 0;
                    for($x=1; $x<=10; $x++){
                        $res = $f * $x;
                        echo"<p>$f X $x = $res</p>";
                    }
                }
                if($w != null){
                    $x = 1;
                    while($x<=10) {
                        $res = $w * $x;
                        echo"<p>$w X $x = $res</p>";
                        $x++;
                    }
                }
            ?>

</main>
<footer><h1>Sistemas WEB I - Prof. Jmaes Willian</h1></footer>
    
</body>
</html>