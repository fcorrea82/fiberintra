<!DOCTYPE html>
<html>
  <head>
    <title>Intranet - FIBERTNT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="../css/style.css" rel="stylesheet">
     
  </head>
<body>
  <!--menu-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B9D3EE;">
    <div class="container">
      <img src="imgs/logo.png"><a class="navbar-brand h1 mb-0" href="index.php">Principal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSite">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold" href="noticias.php">Avisos</a>
          </li>
          <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="comprovantes.php">Envio de Comprovantes</a>
                </li>
                <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tabelas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="tabelaprecos.php">Preços</a>
              <a class="dropdown-item" href="tabela_pesos.php">Pesos</a>
              <!--<div class="dropdown-divider"></div> -->
              <a class="dropdown-item" href="tabeladiametros.php">Diâmetro Bobinas</a>
            <!--</div> -->
            </li>
                    <li class="nav-item ">
                        <a class="nav-link text-dark font-weight-bold" href="consulta_coletas.php">Coletas</a>
                    </li> 

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catálogos
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://192.168.1.105/catalogos/Catalogo_TNT.pdf" target="_blank">FiberTNT</a>
              <a class="dropdown-item" href="http://192.168.1.105/catalogos/Catalogo_Capacho.pdf" target="_blank">Capacho</a>
              <a class="dropdown-item" href="http://192.168.1.105/catalogos/Catalogo_Toalhas_Termicas.pdf" target="_blank">Toalhas Térmicas</a>
            <!--</div> -->
            </li>

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ficha Técnica
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_20.pdf" target="_blank">TNT 20 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_30.pdf" target="_blank">TNT 30 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_35.pdf" target="_blank">TNT 35 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_40.pdf" target="_blank">TNT 40 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_50.pdf" target="_blank">TNT 50 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_60.pdf" target="_blank">TNT 60 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_80.pdf" target="_blank">TNT 80 GR</a>
             
              <a class="dropdown-item" href="http://192.168.1.105/laudos/PE_Laminado_50_Branco.pdf" target="_blank">PE Laminado 50 Branco</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/PE_Laminado_50_Azul.pdf" target="_blank">PE Laminado 50 Azul</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/PE_Laminado_60_Branco.pdf" target="_blank">PE Laminado 60 Branco</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/PE_Laminado_60_Azul.pdf" target="_blank">PE Laminado 60 Azul</a>  

            
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold" href="cartas.php">Cartas de Cessão</a>
             </li>
                

            </ul>

              
        </div>

    </div>  

    </nav>
   <!--fim menu-->



	            
              
      
    <br>
  
<!-- Formulary -->
<div class="container">
   <form method="POST" action="processacomprovantes.php" enctype="multipart/form-data">
  <div class="row">
      <div class="col-md-12 col-10 text-center my-md-4 mb-4 mt-2 ml-4">
          <h3 class="display-5"><i class="fas fa-envelope text-primary col-12 col-md-1" aria-hidden="true"></i>
                    Envio de Comprovantes
          </h3>
      </div>
  </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-2">
                            <label for="n_pedido" class="font-weight-bold">N° Pedido:</label>
                            <input type="text" class="form-control" id="n_pedido" name="n_pedido"  required name="n_pedido">
                        </div>

                         <div class="form-group col-sm-6">
                                <label for="arquivo3" class="font-weight-bold">Arquivo Pedido:</label>
                                <input type="file" class="form-control" id="arquivo3" name="arquivo3">
                        </div>

                    </div>
                     <div class="form-row">
                        <div class="form-group col-sm-3">
                                <label for="empresa" class="font-weight-bold">Empresa:</label>
                                <select id="empresa" class="form-control" name="empresa">
                                    <option selected>Selecione...</option>
                                    <option>MAT</option>
                                    <option>GERAR</option>
                                </select>
                        </div>
                         <div class="form-group col-sm-3">
                                <label for="status_deposito" class="font-weight-bold">Status:</label>
                                <select id="status_deposito" class="form-control" name="status_deposito">
                                    <option selected>Pendente</option>
                                    <option>Confirmado</option>
                                   
                                </select>
                        </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group col-sm-6">
                                <label for="arquivo1" class="font-weight-bold">Comprovante 1:</label>
                                <input type="file" class="form-control" id="arquivo1" name="arquivo1">
                        </div>
                        <div class="form-group col-sm-6">
                                <label for="arquivo2" class="font-weight-bold">Comprovante 2:</label>
                                <input type="file" class="form-control" id="arquivo2" name="arquivo2">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                                <label for="inputEnd" class="font-weight-bold">Observação:</label>
                                <textarea class="form-control" id="observacao" rows="3" required name="observacao" placeholder="Digite aqui como será as bobinas"></textarea>
                               <!-- <input type="text" class="form-control" id="observacao" placeholder="Digite aqui como será as bobinas" require name="observacao"> -->
    
                        </div>
                    </div>    

                   
                               

                     

                    <div class="form-row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-md font-weight-bold">Enviar</button>
                            <!--<a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus"
                            title="Pintou alguma dúvida?!" data-content="Fale conosco: help@rotaryViagens.com">Ajuda</a> -->
                        </div>
                    </div>

                </div>

            </form>
       
          </div>
     
          <div class="content">
          <legend class="text-left">O prazo para confirmação do depósito irá ocorrer em até 2 dias úteis após o envio do comprovante.</legend>     

          </div>
  
       




</body>
</html>