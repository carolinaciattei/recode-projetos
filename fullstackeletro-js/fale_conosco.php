<?php 
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "fullstackeletro"; 

    // criando a conexão 
    $conn = mysqli_connect($servername, $username, $password, $database); 
    
    // verificando a conexão 
    if (!$conn) { 
        die("A conexão ao BD falhou: " . mysqli_connect_error()); 
    }

    if (isset($_POST['nome']) && isset($_POST['msg'])){ 
        $nome = $_POST['nome']; 
        $msg = $_POST['msg']; 
        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);   
    }
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8"> 
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body> 

<!-- Menu -->
<?php
    include('menu.html'); 
?>  

    <header> 
    <h2>Contato</h2>
    </header>
    <hr> 

    <section class="contatos">  
        <div class="e_mail"> 
            <img src="./imagens/logo-email.png" width="50px"> 
            <p>contato@fullstackeletro.com</p> 
        </div>
        <div class="whatsapp"> 
            <img src="./imagens/logo-zap.png" width="50p"> 
                <p>(21) 98888-7777 | (21) 98888-7776 </p>
        </div>
    </section>
    
    <br> 
    <br> 

    <section class="formulario"> 
    <form method="post" action=""> 
        Nome:<br> 
        <input type="text" name="nome" style="width:500px"><br> 
        Mensagem:<br> 
        <input type="text" name="msg" style="width:500px"><br>

        <input type="submit" name="submit" value="Enviar"><br> 
    </form> 
    </section>

    
    <?php 

        $sql = "select * from comentarios"; 
        $result = $conn->query($sql); 
    
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){ 
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "<hr>"; 

            } 
        } else { 
            echo "Nenhum comentário ainda!"; 
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