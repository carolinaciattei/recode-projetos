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
        <h1>Produtos</h1>
    </header>
    <hr> 
 
<div class="opcoes_produtos"> 
    <section class="categorias">
        <h3>Categorias</h3>
        <ul>
            <li onclick="exibir_todos()">Todos (12)</li>
            <li onclick="exibir_categoria('box_geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('box_fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('box_microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('box_lavadoraderoupas')">Lavadora de roupas(2)</li>
            <li onclick="exibir_categoria('box_lavaloucas')">Lava-louças(2)</li>       
        </ul>
    </section>

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

<footer id="rodape">
    <p id="formas_pagamento"><b>Formas de pagamento</b></p>
    <img src="./imagens/formas-pagamento.png"> 
    <p>&copy; Recode Pro</p> 
</footer>

</body>
</html> 