<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
   
</head>

<body>

    <main class="main">

    <div class="container container-text-center">
    <h3 class="main__titulo">Escolha qual marca de têsnis você mais gosta ! </h3>

    <br>
       
    <div class="row">
    <div class="card" style="width: 18rem; margin-right:5rem;">
  <img src="img/nike.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">NIKE</h5>
    <p class="card-text text-justify-center">Nike, Inc. é uma empresa estadunidense de calçados, roupas, e acessórios fundada em 1972 por Bill Bowerman e Philip Knight. A sua sede fica em Beaverton, no estado de Oregon, nos Estados Unidos.</p>
  
</div>
</div>


<div class="card" style="width: 18rem;">
  <img src="img/adidas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ADIDAS</h5>
    <p class="card-text text-justify-center">Adidas é uma empresa fundada na Alemanha. A empresa tem o nome de seu fundador, Adolf Dassler, também conhecido pelo apelido de Adi, que começou a produzir sapatilhas nos anos 1920 .</p>
    
</div>
</div>
</div>
<br>


<form action="" method="POST">
    <input type="submit" name="Resultado" value="Resultado" style="margin: .5rem 0;"/>
    <br>
    <input type="radio" name="opcao" value="opcao1">Nike<br>

    <input type="radio" name="opcao" value="opcao2">Adidas<br>
  

    </form><br>

    <?php




$opcoes = array(


'opcao1' => 'Nike',


'opcao2' => 'Adidas',



);


if(isset($_POST['Resultado'])) {

$opcao = $_POST['opcao'];


if(array_key_exists($opcao, $opcoes)) {

$arquivo = fopen("dados.txt", "a+");

fwrite($arquivo, $opcao."\n");

fclose($arquivo);

}
}


$arquivo = fopen("dados.txt", "r");


$votos = array(

'opcao1' => 0,

'opcao2' => 0,


);

while(!feof($arquivo)) {

$linha = fgets($arquivo);

if(array_key_exists(trim($linha), $votos)) {

$votos[trim($linha)]++;

}

}

fclose($arquivo);


foreach($votos as $opcao => $qtd_votos) {

echo "<p>".$opcoes[$opcao].": ".$qtd_votos." votos</p>";

}

?>