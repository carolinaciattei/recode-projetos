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


    <title>Nossas lojas - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
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
                <div class="col-md-12 col-sm-12"><h2>Nossas lojas</b></h2>
            </div>
        </div>
    </div>   
    </header>
    <hr> 

    <div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h4>Rio de Janeiro</h4>
            <p>Avenida Presidente Vargas, 4500</p>
            <p>1 &ordm: andar</p>
            <p>Centro</p>
            <p>(21) 2222-2222</p>
        </div>
        <div class="col-sm"> 
            <h4>Rio de Janeiro</h4>
            <p>Rua Regente Feijó, 96</p>
            <p>1 &ordm: andar</p> 
            <p>Centro</p>
            <p>(21) 2222-2223</p>
        </div>
        <div class="col-sm">    
            <h4>Rio de Janeiro</h4>
            <p>Rua Uruguaiana, 114/116</p>
            <p>1 &ordm: andar</p>
            <p>Centro</p>
            <p>(21) 2222-2224</p>
        </div>
        <div class="col-sm"> 
            <h4>Rio de Janeiro</h4>
            <p>Rua da Alfândega, 261</p>
            <p>1 &ordm: andar</p>
            <p>Centro</p>
            <p>(21) 2222-2225</p>
        </div>
    </div>
    </div> 

<br> <br>
<br> <br>
<br> <br>

<!--Rodapé--> 
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