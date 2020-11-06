<?php 
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "fullstackeletro"; 

    // criando a conexão 
    $conn = mysqli_connect($servername, $username, $password, $database); 
    
    // verificando a conexão 
    if (!$conn) { 
        die("A conexão ao BD falhou: " .mysqli_connect_erro()); 
    }

?> 

<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="js/funcoes.js"></script>
</head>
<body> 

<!-- Menu -->
<?php
    include('menu.html'); 
?>  
    
    <header> 
    <div class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12"><h2>Produtos</b></h2>
            </div>
        </div>
    </div>   
    </header>
    <hr> 

<div class="container-fluid"> 
    <div class="opcoes_produtos"> 
    <section class="categorias">
        <h4><b>Categorias</b></h4>
        <ul>
            <li onclick="exibir_todos()">Todos (12)</li>
            <li onclick="exibir_categoria('box_geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('box_fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('box_microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('box_lavadoraderoupas')">Lavadora de roupas(2)</li>
            <li onclick="exibir_categoria('box_lavaloucas')">Lava-louças(2)</li>       
        </ul>
</div> 
    </div>
    </section>

<div class="container">
<div class="produtos"> 

    <?php 

        $sql = "select * from produtos"; 
        $result = $conn->query($sql); 
    
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){ 
    ?> 
 
        <div class="box_produto" style="display: block;" id="box_<?php echo $rows["categoria"]; ?>"> 
            <img src="<?php echo $rows["imagem"]; ?>" width="120px" onmousemove="zoomImg(this)" onmouseout="normalImg(this)">   
            <br> 
            <div class="descricao"><?php echo $rows["descricao"]; ?></div> 
            <hr> 
            <div class="preco_anterior"><strike>R$ <?php echo $rows["precoantigo"]; ?></strike></div> 
            <div class="preco">R$ <?php echo $rows["precofinal"]; ?></div> 

        </div> 
        
    <?php
            } 
        } else { 
            echo "Nenhum produto cadastrado!"; 
        }    
    ?> 

<br> 

<!-- Rodapé --> 
<div class="d-flex flex-column">
  <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <p class="mt-2 text-danger"><b>Formas de pagamento</b></p>
          <img src="./imagens/formas-pagamento.png">
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="py-2 bg-dark text-white-50">
    <div class="container text-center">
      <small>&copy; Recode Pro</small>
    </div>
  </footer>
</div> 

</body>
</html> 