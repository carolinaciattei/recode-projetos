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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body> 

<!-- Menu -->
<?php
    include('menu.html'); 
?>  

    <header> 
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12"><h2>Contato</b></h2>
            </div>
        </div>
    </div>   
    </header>
    <hr> 

<div class="container">
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
</div> 
    
<br> 
<br> 


<div class="container"> 
    <div class="form-group d-flex justify-content-center">  
    <form method="post" action=""> 
        <a>Nome:</a>
        <input type="text" name="nome" placeholder="Digite aqui o seu nome e sobrenome" class="form-control" style="width:300px"><br> 
        <a> Mensagem:</a> 
        <textarea type="text" name="msg" placeholder="Digite aqui sua mensagem" class="form-control" style="width:300px"></textarea>
        <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Desejo receber notificações da loja</label>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </div> 
    </div> 
    </form>
</div> 
    
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

<!-- Rodapé --> 
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <p class="mt-2 text-danger"><b>Formas de pagamento</b></p>
          <img src="./imagens/formas-pagamento.png">
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