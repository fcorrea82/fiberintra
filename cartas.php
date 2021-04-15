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

	

<!--menu inicio-->
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
            
              <a class="dropdown-item" href="tabeladiametros.php">Diâmetro Bobinas</a>
          
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

<!-- Content -->
<div class="container">
  <div class="row">
      <div class="col-md-12 col-10 text-center my-md-4 mb-4 mt-2 ml-4">
          <h3 class="display-5"><i class="fas fa-envelope text-primary col-12 col-md-1" aria-hidden="true"></i>
                    Modelos de Carta de Cessão de Crédito
          </h3>
      </div>
  </div>

  <div class="row justify-content-center mb-5">
    <div class="col-sm-12 col-md-10 col-lg-8">
      <p><h4>Quando utilizar a carta de cessão?</h4></p>
      <br>
      <h5>O contrato de cessão de crédito é o negócio jurídico no qual uma das partes contratantes transfere a terceiro seus direitos em um relação jurídica obrigacional.</h5>
      <br>

    <div class="form-row list-group">
       <ul><h5>Estão presentes nesta relação:</h5>
       <ol><h5>1 - Cedente: Aquele que transfere o crédito.</h5></ol>
       <ol><h5>2 - Cessionário: aquele que recebeu o crédito.</h5></ol>

      </ul>

     <p><h5>Modelos para carta de cessão:</h5>
      <br>

       <h5>De Pessoa Jurídica para Pessoa Jurídica -<a href="http://192.168.1.105/cartas/PJ_PJ.docx"> <img src="imgs/baixar.jpg" width="50" height="50"></a></h5>
       <h5>De Pessoa Jurídica para Pessoa Física -<a href="http://192.168.1.105/cartas/PJ_PF.docx"> <img src="imgs/baixar.jpg" width="50" height="50"></a></h5>
       <h5>De Pessoa Física para Pessoa Física -<a href="http://192.168.1.105/cartas/PF_PF.docx"> <img src="imgs/baixar.jpg" width="50" height="50"></a></h5>
       <h5>De Pessoa Física para Pessoa Jurídica -<a href="http://192.168.1.105/cartas/PF_PJ.docx"> <img src="imgs/baixar.jpg" width="50" height="50"></a></h5>
   

      

      <br>


   
    </div>
    </div>
  </div>
</div>    



         

      


<!-- fim content -->
   


	</body>
</html>